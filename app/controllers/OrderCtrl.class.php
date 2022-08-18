<?php

namespace app\controllers;

class OrderCtrl
{
public function action_order(){
    $this->generateView();
}
public function generateView(){
    getSmarty()->assign('page_title','Zamówienia');
    getSmarty()->display('OrderView.tpl');
}
}