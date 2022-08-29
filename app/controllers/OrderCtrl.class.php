<?php

namespace app\controllers;

use core\App;
use core\FunctionsDB;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

use app\forms\OrderInfoForm;
class OrderCtrl
{
    private $order;
    private $page;
    private $ordersOnPage = 10;


    public function __construct() {
        $this->order = new OrderInfoForm();
    }
    
    public function getForm($source){
        if($source == "yourOrder"){
            $this->order->dateOfReceive = ParamUtils::getFromRequest('dateOfReceive');
        }
    
    }
    
    public function getURL(){
        $this->order->id_Order = ParamUtils::getFromCleanURL(1, true, 'Błąd');
    
        return !App::getMessages()->isError();
    }

    public function action_yourOrder(){
        // # Get params
        // $this -> getForm("myOrder");
        $id_user = SessionUtils::load("idUser", $keep = true);
        # Set filter params
        $filter_params = [];
        // if (isset($this->order->dateOfReceive) && strlen($this->order->dateOfReceive) > 0) {
        //     $filter_params['dateOfReceive[~]'] = $this->order->dateOfReceive.'%';
        // }
        $filter_params['User_idUser[~]'] = $id_user.'%';
        // App::getSmarty()->assign('searchForm', $this->order);
            
        # Prepare $where for DB operation
        $order = ["dateOfReceive"];
        $where = FunctionsDB::prepareWhere($filter_params, $order);
    
        
        # Get number of found orders
        $numRecords = FunctionsDB::countRecords("myorder", $where); 
        App::getSmarty()->assign("numRecords", $numRecords);
        
        if($numRecords > 0){
            # Get page
            $this->page = FunctionsDB::getPage($numRecords, $this->ordersOnPage);
   
            # Get offset of orders
            $offset = $this->ordersOnPage*($this->page-1);
            $where["LIMIT"] = [$offset, $this->ordersOnPage];
            # Get order list from DB
            $column = ["idOrder", "dateOfReceive"];
            App::getSmarty()->assign('records', FunctionsDB::getRecords("select", "myorder", null, $column, $where));
        }
        
       # Redirect to page
        $this->generateView("YourOrder.tpl");
   }

public function action_orderInfo(){
    if($this -> getURL()){   
        # Check if title exists
        if(!App::getDB()->has("myorder", ["idOrder" => $this->order->id_Order])){
            App::getRouter()->redirectTo("yourOrder");
        }
        # Get order info    
        $colum = ["dateOfOrder", "dateOfReceive"];
        $where = ["idOrder" => $this->order->id_Order];
        App::getSmarty()->assign('myorder', FunctionsDB::getRecords("get", "myorder", null, $colum,$where));
        
        # Redirect to page
        $this->generateView("yourOrderInfo.tpl");
    }else{
        App::getRouter()->redirectTo("yourOrder");
    }
 }

 public function action_allOrders(){
    // # Get params
    // $this -> getForm("myOrder");
    # Set filter params
    $filter_params = [];
    if (isset($this->order->dateOfReceive) && strlen($this->order->dateOfReceive) > 0) {
        $filter_params['dateOfReceive[~]'] = $this->order->dateOfReceive.'%';
    }
    App::getSmarty()->assign('searchForm', $this->order);
        
    # Prepare $where for DB operation
    $order = ["dateOfReceive"];
    $where = FunctionsDB::prepareWhere($filter_params, $order);
    
    # Get number of found books 
    $numRecords = FunctionsDB::countRecords("myOrder", $where); 
    App::getSmarty()->assign("numRecords", $numRecords);
    
    if($numRecords > 0){
        # Get page
        $this->page = FunctionsDB::getPage($numRecords, $this->ordersOnPage);

        # Get offset of books
        $offset = $this->ordersOnPage*($this->page-1);
        $where["LIMIT"] = [$offset, $this->ordersOnPage];

        # Get book titles list from DB
        $column = ["idOrder", "dateOfReceive"];
        App::getSmarty()->assign('records', FunctionsDB::getRecords("select", "myOrder", null, $column, $where));
    }
    
   # Redirect to page
    $this->generateView("YourOrder.tpl");
}

 public function generateView($page) {
    App::getSmarty()->assign('user', SessionUtils::loadObject("user", true));
    App::getSmarty()->display($page);
}

}