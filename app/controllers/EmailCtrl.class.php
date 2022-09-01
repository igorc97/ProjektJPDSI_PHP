<?php
namespace app\controllers;

use core\App;
use core\SessionUtils;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\EmailForm;

class EmailCtrl{
    
    private $EForm;

    public function __construct(){
        $this->EForm = new EmailForm();
    }


    public function validate()
    {
            $this->EForm->name = ParamUtils::getFromRequest('name');
            $this->EForm->email = ParamUtils::getFromRequest('email');
            $this->EForm->subject = ParamUtils::getFromRequest('subject');
            $this->EForm->message = ParamUtils::getFromRequest('message');
           
        if (!(isset($this->EForm->name) && isset($this->EForm->email) && isset($this->EForm->subject) && isset($this->EForm->message))) {
            return false;
        }
       
            if (empty($this->EForm->name)) {
                Utils::addErrorMessage('Nie podano imienia');
            }
            if (empty($this->EForm->email)) {
                Utils::addErrorMessage('Nie podano adresu email');
            }
            if (empty($this->EForm->subject)) {
                Utils::addErrorMessage('Nie podano tematu');
            }
            if (empty($this->EForm->message)) {
                Utils::addErrorMessage('Nie podano treści');
            } 
            if (App::getMessages()->isError())
            return false;
       
        return !App::getMessages()->isError();
    }
           
    public function sendIt() {
        $to = 'igorceglarz@gmail.com';
        $subject = $this->EForm->subject;
        $email = $this->EForm->email;
        $message = $this->EForm->message;
        $name = $this->EForm->name;
        $headers = array(
            'From' => $email,
            'Name' => $name
        );
        $success = mail($to, $subject, $message, $headers);
        if(!$success){
            Utils::addErrorMessage("Wystąpił błąd");
            print("Nie działa");
        }
    }
    

    
    public function action_sendEmail(){
        if($this->validate()){
            $this->sendIt();
            Utils::addErrorMessage('Poprawnie wysłano');
            App::getRouter()->redirectTo("main");
        } else {
            $this->generateView();
        }
        }



    public function generateView(){
        App::getSmarty()->assign('EForm', $this->EForm);
        App::getSmarty()->display('contact.tpl');
}
}