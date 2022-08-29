<?php

namespace app\controllers;

use core\App;
use core\FunctionsDB;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

use app\forms\BookEditForm;

class AdminCtrl
{
    private $book;
    private $page;
    private $recordsOnPage = 10;
    
    public function __construct() {
        $this->book = new BookInfoForm();
    }
    
    public function getForm($source){
        if($source == "userList"){
            $this->book->title = ParamUtils::getFromRequest('name');
        }
    
    }
    
    public function getURL(){
        $this->book->id_book = ParamUtils::getFromCleanURL(1, true, 'Błąd');
    
        return !App::getMessages()->isError();
    }
    
    public function action_userList(){
         # Get params
         $this -> getForm("book");
                
         # Set filter params
         $filter_params = [];
         if (isset($this->book->title) && strlen($this->book->title) > 0) {
             $filter_params['title[~]'] = $this->book->title.'%';
         }
         App::getSmarty()->assign('searchForm', $this->book);
             
         # Prepare $where for DB operation
         $order = ["title"];
         $where = FunctionsDB::prepareWhere($filter_params, $order);
         
         # Get number of found books 
         $numRecords = FunctionsDB::countRecords("book", $where); 
         App::getSmarty()->assign("numRecords", $numRecords);
         
         if($numRecords > 0){
             # Get page
             $this->page = FunctionsDB::getPage($numRecords, $this->booksOnPage);
    
             # Get offset of books
             $offset = $this->booksOnPage*($this->page-1);
             $where["LIMIT"] = [$offset, $this->booksOnPage];
    
             # Get book titles list from DB
             $column = ["idBook", "title"];
             App::getSmarty()->assign('records', FunctionsDB::getRecords("select", "book", null, $column, $where));
         }
         
        # Redirect to page
         $this->generateView("BookList.tpl");
    }
}
