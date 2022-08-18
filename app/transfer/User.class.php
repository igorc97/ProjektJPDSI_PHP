<?php


namespace app\transfer;


class User
{
    public $login;
    public $Role_idRole;
    public $idUser;

    public function __construct($login, $Role_idRole){
        $this->login = $login;
        $this->Role_idRole = $Role_idRole;
    }
}