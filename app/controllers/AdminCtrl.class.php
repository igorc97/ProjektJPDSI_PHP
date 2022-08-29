<?php

namespace app\controllers;

use core\App;
use core\FunctionsDB;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

use app\forms\PersonSearchForm;

class AdminCtrl
{
    private $user;
    private $page;
    private $recordsOnPage = 10;
    
    public function __construct() {
        $this->user = new PersonSearchForm();
    }
    
    public function getForm($source){
        if($source == "userList"){
            $this->user->name = ParamUtils::getFromRequest('name');
        }
    
    }
    
    public function getURL(){
        $this->user->id_user = ParamUtils::getFromCleanURL(1, true, 'Błąd');
    
        return !App::getMessages()->isError();
    }
    
    public function action_userList(){
         # Get params
         $this -> getForm("user");
                
         # Set filter params
         $filter_params = [];
         if (isset($this->user->id_user) && strlen($this->user->id_user) > 0) {
             $filter_params['idUser[~]'] = $this->user->id_user.'%';
         }
         App::getSmarty()->assign('searchForm', $this->user);
             
         # Prepare $where for DB operation
         $order = ["idUser"];
         $where = FunctionsDB::prepareWhere($filter_params, $order);
         
         # Get number of found books 
         $numRecords = FunctionsDB::countRecords("user", $where); 
         App::getSmarty()->assign("numRecords", $numRecords);
         
         if($numRecords > 0){
             # Get page
             $this->page = FunctionsDB::getPage($numRecords, $this->recordsOnPage);
    
             # Get offset of books
             $offset = $this->recordsOnPage*($this->page-1);
             $where["LIMIT"] = [$offset, $this->recordsOnPage];
    
             # Get book titles list from DB
             $column = ["idUser", "name", "surname"];
             App::getSmarty()->assign('records', FunctionsDB::getRecords("select", "user", null, $column, $where));
         }
         
        # Redirect to page
         $this->generateView("usersList.tpl");
    }

    public function action_userInfo(){
        if($this -> getURL()){   
            # Check if user exists
            if(!App::getDB()->has("user", ["idUser" => $this->user->id_user])){
                App::getRouter()->redirectTo("userList");
            }
            # Get order info    
            $colum = ["name", "surname", "birthdate", "email", "login", "pass"];
            $where = ["idUser" => $this->user->id_user];
            App::getSmarty()->assign('userek', FunctionsDB::getRecords("get", "user", null, $colum,$where));
            
            # Redirect to page
            $this->generateView("userInfo.tpl");
        }else{
            App::getRouter()->redirectTo("userList");
        }
     }

     public function action_userDelete(){
        if ($this -> getURL()) {
            //print("hehe");
            try {
                App::getDB()->delete("user", [
                    "idUser" => $this->user->id_user
                ]);
                Utils::addInfoMessage('Usunięto użytkownika o id '.$this->user->id_user.' z systemu');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug){ Utils::addErrorMessage($e->getMessage()); }
            }
        }
        App::getRouter()->forwardTo('userList');
     }

    public function generateView($page) {
        App::getSmarty()->assign('user', SessionUtils::loadObject("user", true));
        App::getSmarty()->display($page);
    }
}
