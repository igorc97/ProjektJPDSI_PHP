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

    // if($source == "bookStock"){
    //     $this->book->book_code = ParamUtils::getFromRequest('book_code');
    //     $this->book->title = ParamUtils::getFromRequest('title');
    //     $this->book->borrowed = ParamUtils::getFromRequest('borrowed');
    // }
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
        //$join = ["[><]author_info" => ["author" => "id_author"]];
        $colum = ["title", "author", "isbn", "publishingHouse", 
                  "releaseDate", "price", "availability", "description"];
        $where = ["idBook" => $this->book->id_book];
        App::getSmarty()->assign('book', FunctionsDB::getRecords("get", "book", null, $colum,$where));

        # Get number of books
        $book_code = FunctionsDB::getRecords("get", "book",null ,"isbn",$where);
        $where = ["book_code" => $book_code];  
        App::getSmarty()->assign('allBooks', FunctionsDB::countRecords("book_stock", $where));     

        $where = ["book_code" => $book_code, "borrowed" => 1];
        App::getSmarty()->assign('borrowedBooks', FunctionsDB::countRecords("book_stock", $where)); 

        # Redirect to page
        $this->generateView("BookInfo.tpl");
    }else{
        App::getRouter()->redirectTo("bookList");
    }
}

    public function add(){

    }

    public function generateView($page) {
        App::getSmarty()->assign('user', SessionUtils::loadObject("user", true));
        App::getSmarty()->display($page);
    }
}
