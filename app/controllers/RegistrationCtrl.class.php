<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\Validator;
use app\forms\RegistrationForm;


class RegistrationCtrl
{
private $formr;
public function __construct()
{
    $this->formr = new RegistrationForm();
}

public function validate()
{
        $this->formr->name = ParamUtils::getFromRequest('name');
        $this->formr->surname = ParamUtils::getFromRequest('surname');
        $this->formr->birthDate = ParamUtils::getFromRequest('birthDate');
        $this->formr->login = ParamUtils::getFromRequest('login');
        $this->formr->pass = ParamUtils::getFromRequest('pass');
        $this->formr->email = ParamUtils::getFromRequest('email');
    if (!(isset($this->formr->name) && isset($this->formr->surname) && isset($this->formr->birthDate) && isset($this->formr->login) && isset($this->formr->pass) && isset($this->formr->email))) {
        return false;
    }
   
        if (empty($this->formr->name)) {
            Utils::addErrorMessage('Nie podano imienia');
        }
        if (empty($this->formr->surname)) {
            Utils::addErrorMessage('Nie podano nazwiska');
        }
        if (empty($this->formr->birthDate)) {
            Utils::addErrorMessage('Nie podano daty urodzenia');
        }
        if (empty($this->formr->login)) {
            Utils::addErrorMessage('Nie podano nazwy użytkownika');
        }
        if (empty($this->formr->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }
        if (empty($this->formr->email)) {
            Utils::addErrorMessage('Nie podano email');
        }
    
        if (App::getMessages()->isError())
        return false;

    try {
        $user = App::getDB()->get("user", '*', [
            "login" => $this->formr->login
        ]);
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordu!');
        if (App::getConf()->debug)
            Utils::addErrorMessage($e->getMessage());
    }
    
    if ($user != 0) {
        Utils::addErrorMessage('Użytkownik o poddanym loginie już istnieje!');
        $user = 0;
    }
    return !App::getMessages()->isError();
}

public function validateData(){
    $v = new Validator();

    $this->formr->login = $v->validateFromPost('login', [
        'trim' => true,
        'required' => true,
        'required_message' => 'Podaj login',
        'min_length' => 3,
        'max_length' => 25,
        'validator_message' => 'Login powinien mieć od 3 do 25 znaków'
    ]);
    
    $this->formr->pass = $v->validateFromPost('pass', [
        'trim' => true,
        'required' => true,
        'required_message' => 'Podaj hasło',
        'min_length' => 5,
        'max_length' => 25,
        'validator_message' => 'Hasło powinno mieć od 5 do 25 znaków'
    ]);
    
    $this->formr->name = $v->validateFromPost('name', [
        'trim' => true,
        'required' => true,
        'required_message' => 'Podaj imię',
        'min_length' => 3,
        'max_length' => 16,
        'validator_message' => 'Imię powinno mieć od 3 do 16 znaków'
    ]);

    $this->formr->surname = $v->validateFromPost('surname', [
        'trim' => true,
        'required' => true,
        'required_message' => 'Podaj nazwisko',
        'min_length' => 3,
        'max_length' => 16,
        'validator_message' => 'Nazwisko powinno mieć od 3 do 16 znaków'
    ]);

    $this->formr->email = $v->validateFromPost('email', [
        'trim' => true,
        'email' => true,
        'required' => true,
        'required_message' => 'Podaj email'
    ]);

    return !App::getMessages()->isError();
}
    
public function addNewUser() {
    if($this->validateData()){
    App::getDB()->insert("user", [
        "login" => $this->formr->login,
        "pass" => $this->formr->pass,
        "Role_idRole" => "2",
        "name" => $this->formr->name,
        "surname" => $this->formr->surname,
        "birthdate" => $this->formr->birthDate,
        "email" => $this->formr->email
    ]);
    }else{
        $this->generateView();
    }
}

public function action_registerShow() {
    $this->generateView();
}

public function action_register(){
    if($this->validate()){
        $this->addNewUser();
        Utils::addErrorMessage('Poprawnie zarejestrowano');
        App::getRouter()->redirectTo("loginShow");
    } else {
        $this->generateView();
    }
    }

public function generateView(){
        App::getSmarty()->assign('formr', $this->formr);
        App::getSmarty()->display('RegistrationView.tpl');
}
}