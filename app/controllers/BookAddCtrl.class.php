<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\Validator;
use core\SessionUtils;
use app\forms\BookAddForm;


class BookAddCtrl
{
private $form;
public function __construct()
{
    $this->form = new BookAddForm();
}

public function validate()
{
        $this->form->title = ParamUtils::getFromRequest('title');
        $this->form->author = ParamUtils::getFromRequest('author');
        $this->form->isbn = ParamUtils::getFromRequest('isbn');
        $this->form->publishingHouse = ParamUtils::getFromRequest('publishingHouse');
        $this->form->releaseDate = ParamUtils::getFromRequest('releaseDate');
        $this->form->price = ParamUtils::getFromRequest('price');
        $this->form->availability = ParamUtils::getFromRequest('availability');
        $this->form->description = ParamUtils::getFromRequest('description');
    if (!(isset($this->form->title) && isset($this->form->author) && isset($this->form->isbn) && isset($this->form->publishingHouse) && isset($this->form->releaseDate) && isset($this->form->price) && isset($this->form->availability)&& isset($this->form->description))) {
        return false;
    }
   
        if (empty($this->form->title)) {
            Utils::addErrorMessage('Nie podano tytułu');
        }
        if (empty($this->form->author)) {
            Utils::addErrorMessage('Nie podano autora');
        }
        if (empty($this->form->isbn)) {
            Utils::addErrorMessage('Nie podano numeru isbn');
        }
        if (empty($this->form->publishingHouse)) {
            Utils::addErrorMessage('Nie podano nazwy wydawcy');
        }
        if (empty($this->form->releaseDate)) {
            Utils::addErrorMessage('Nie podano daty');
        }
        if (empty($this->form->price)) {
            Utils::addErrorMessage('Nie podano ceny');
        }
        if (empty($this->form->availability)) {
            Utils::addErrorMessage('Nie podano dostępności (0/1)');
        }
        if (empty($this->form->description)) {
            Utils::addErrorMessage('Nie podano opisu');
        }
    
        if (App::getMessages()->isError())
        return false;

    try {
        $book = App::getDB()->get("book", '*', [
            "title" => $this->form->title
        ]);
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordu!');
        if (App::getConf()->debug)
            Utils::addErrorMessage($e->getMessage());
    }
    
    if ($book != 0) {
        Utils::addErrorMessage('Obiekt o podanym tytule już istnieje już istnieje!');
        $book = 0;
    }
    return !App::getMessages()->isError();
}

public function validateData(){
    $v = new Validator();

    $this->form->publishingHouse = $v->validateFromPost('publishingHouse', [
        'trim' => true,
        'required' => true,
        'required_message' => 'Podaj wydawnictwo',
        'min_length' => 3,
        'max_length' => 25,
        'validator_message' => 'Nazwa wydawnictwa powinna mieć od 3 do 25 znaków'
    ]);
    
    $this->form->title = $v->validateFromPost('title', [
        'trim' => true,
        'required' => true,
        'required_message' => 'Podaj tytuł',
        'min_length' => 5,
        'max_length' => 25,
        'validator_message' => 'Tytuł powinnien mieć od 5 do 25 znaków'
    ]);
    
    $this->form->author = $v->validateFromPost('author', [
        'trim' => true,
        'required' => true,
        'required_message' => 'Podaj autora',
        'min_length' => 3,
        'max_length' => 25,
        'validator_message' => 'Pole powinno zawierać od 3 do 16 znaków'
    ]);

    $this->form->isbn = $v->validateFromPost('isbn', [
        'trim' => true,
        'required' => true,
        'required_message' => 'Podaj numer isbn',
        'min_length' => 3,
        'max_length' => 16,
        'validator_message' => 'Numer isbn powinnien mieć od 3 do 16 znaków'
    ]);


    return !App::getMessages()->isError();
}
    
public function addNewBook() {
    if($this->validateData()){
    App::getDB()->insert("book", [
        "title" => $this->form->title,
        "author" => $this->form->author,
        "isbn" => $this->form->isbn,
        "publishingHouse" => $this->form->publishingHouse,
        "releaseDate" => $this->form->releaseDate,
        "price" => $this->form->price,
        "availability" => $this->form->availability,
        "description" => $this->form->description
    ]);
    }else{
        $this->generateView();
    }
}

public function action_registerShow() {
    $this->generateView();
}

public function action_addBook(){
    if($this->validate()){
        $this->addNewBook();
        Utils::addErrorMessage('Poprawnie dodano');
        App::getRouter()->redirectTo("bookList");
    } else {
        $this->generateView();
    }
    }

public function generateView(){
    App::getSmarty()->assign('user', SessionUtils::loadObject("user", true));
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('BookAddView.tpl');
}
}