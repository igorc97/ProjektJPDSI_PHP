<?php

namespace app\controllers;

use core\App;
use core\FunctionsDB;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

use app\forms\BookInfoForm;   // jako produkt
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

public function action_store(){
    // // 1. Walidacja danych formularza (z pobraniem)
    //     // - W tej aplikacji walidacja nie jest potrzebna, ponieważ nie wystąpią błedy podczas podawania nazwiska.
    //     //   Jednak pozostawiono ją, ponieważ gdyby uzytkownik wprowadzał np. datę, lub wartość numeryczną, to trzeba
    //     //   odpowiednio zareagować wyświetlając odpowiednią informację (poprzez obiekt wiadomości Messages)
    //     $this->validate();

    //     // 2. Przygotowanie mapy z parametrami wyszukiwania (nazwa_kolumny => wartość)
    //     $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
    //     if (isset($this->form->surname) && strlen($this->form->surname) > 0) {
    //         $search_params['surname[~]'] = $this->form->surname . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
    //     }

    //     // 3. Pobranie listy rekordów z bazy danych
    //     // W tym wypadku zawsze wyświetlamy listę osób bez względu na to, czy dane wprowadzone w formularzu wyszukiwania są poprawne.
    //     // Dlatego pobranie nie jest uwarunkowane poprawnością walidacji (jak miało to miejsce w kalkulatorze)
    //     //przygotowanie frazy where na wypadek większej liczby parametrów
    //     $num_params = sizeof($search_params);
    //     if ($num_params > 1) {
    //         $where = ["AND" => &$search_params];
    //     } else {
    //         $where = &$search_params;
    //     }
    //     //dodanie frazy sortującej po nazwisku
    //     $where ["ORDER"] = "surname";
    //     //wykonanie zapytania

    //     try {
    //         $this->records = App::getDB()->select("person", [
    //             "idperson",
    //             "name",
    //             "surname",
    //             "birthdate",
    //                 ], $where);
    //     } catch (\PDOException $e) {
    //         Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
    //         if (App::getConf()->debug)
    //             Utils::addErrorMessage($e->getMessage());
    //     }

        // 4. wygeneruj widok
        //App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
       // App::getSmarty()->assign('people', $this->records);  // lista rekordów z bazy danych
        //App::getSmarty()->display('storeView.tpl');
    }

    public function generateView($page) {
        App::getSmarty()->assign('user', SessionUtils::loadObject("user", true));
        App::getSmarty()->display($page);
    }
}
