<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\FunctionsDB;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\LoginForm;
use app\transfer\User;
class LoginCtrl
{
    private $form;
    private $pass;

    public function __construct(){
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // sprawdzenie, czy dane logowania poprawne
        // (takie informacje najczęściej przechowuje się w bazie danych)


        // if ($this->form->login == "admin" && $this->form->pass == "admin") {
        //     RoleUtils::addRole('admin');
        // } else if ($this->form->login == "user" && $this->form->pass == "user") {
        //     RoleUtils::addRole('user');
        // } else {
        //     Utils::addErrorMessage('Niepoprawny login lub hasło');
        // }

        // return !App::getMessages()->isError();

            
        $where = ["login" => $this->form->login];
        $column = ["idUser", "pass", "Role_idRole"];
        
        $user = FunctionsDB::getRecords("get", "user", null, $column, $where);

        if (isset($user["pass"]) && $this->form->pass == $user["pass"]) { 
            RoleUtils::addRole($user["Role_idRole"]);
            
            SessionUtils::storeObject("user", new User($this->form->login, $user["Role_idRole"]));
            SessionUtils::store("idUser", $user["idUser"]);
        } else { Utils::addErrorMessage('Niepoprawny login lub hasło'); }

        return !App::getMessages()->isError();


    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login(){

        if ($this->validate()){
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("main");
        } else {
            //niezalogowany => wyświetl stronę logowania
            $this->generateView();
        }

    }

    public function action_logout(){
        setcookie("log", "", time() - 3600);
        session_destroy();

        
        App::getRouter()->redirectTo('main');
    }

    public function generateView(){

        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('LoginView.tpl');
    }
}