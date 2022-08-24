<?php

namespace app\controllers;

use core\App;
use core\FunctionsDB;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

use app\forms\BookInfoForm; 
class StoreCtrl
{
private $book;
private $page;
private $booksOnPage = 10;

public function __construct() {
    $this->book = new BookInfoForm();
}

public function getForm($source){
    if($source == "bookList"){
        $this->book->title = ParamUtils::getFromRequest('title');
    }

}

public function getURL(){
    $this->book->id_book = ParamUtils::getFromCleanURL(1, true, 'Błąd');

    return !App::getMessages()->isError();
}

public function action_bookList(){
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

public function action_bookInfo(){
    if($this -> getURL()){   
        # Check if title exists
        if(!App::getDB()->has("book", ["idBook" => $this->book->id_book])){
            App::getRouter()->redirectTo("bookList");
        }
        # Get book info    
        $colum = ["title", "author", "isbn", "publishingHouse", 
                  "releaseDate", "price", "availability", "description"];
        $where = ["idBook" => $this->book->id_book];
        App::getSmarty()->assign('book', FunctionsDB::getRecords("get", "book", null, $colum,$where));
        
        $idk = $this->book->id_book;
        SessionUtils::store("idk",$idk);
        $book= FunctionsDB::getRecords("get", "book", null, $colum,$where);
        SessionUtils::store("bookPrice", $book["price"]);
    
        # Redirect to page
        $this->generateView("BookInfo.tpl");
    }else{
        App::getRouter()->redirectTo("bookList");
    }
}

    public function action_buy(){
        $date = date("Y-m-d");
        $dateOfReceive = date("Y-m-d", strtotime("+14 days"));
            App::getSmarty()->assign('dateOfRec', $dateOfReceive);

        $id_user = SessionUtils::load("idUser", $keep = true);
        $najnowszyidbook = SessionUtils::load("idk");
        $bookPrice = SessionUtils::load("bookPrice", $keep = true);
            try {
                //insert to myorder working correctly
                App::getDB()->insert("myorder", [
                    "dateOfOrder" => $date,
                    "dateOfReceive" => $dateOfReceive,
                    "User_idUser" => $id_user
                ]);
                //BUT IT WORKS!!! should be a better way to find that id, in that case id order will be anything that has that date
                $id_order = App::getDB()->get("myorder", "idOrder",[
                    "dateOfOrder" => $date,
                    "dateOfReceive" => $dateOfReceive,
                    "User_idUser" => $id_user
                ]);
           
                App::getDB()->insert("orderbook", [
                    "price" => $bookPrice,
                    "Order_idOrder" => $id_order,
                    "Book_idBook" => $najnowszyidbook
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
    
            $this->generateView("OrderView.tpl");
      
           
      
       
    }
    

    public function generateView($page) {
        App::getSmarty()->assign('user', SessionUtils::loadObject("user", true));
        App::getSmarty()->display($page);
    }
}
