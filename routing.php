<?php

use core\App;
use core\Utils;

//1 = admin, 2 = user
//default routes
App::getRouter()->setDefaultRoute('main'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)
Utils::addRoute('main', 'MainCtrl', ['1', '2']);


//login/logout 
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
//registration
Utils::addRoute('register', 'RegistrationCtrl');
Utils::addRoute('registerShow', 'RegistrationCtrl');
//store - booklist, bookinfo
Utils::addRoute('bookList', 'StoreCtrl', ['1', '2']);
Utils::addRoute('bookInfo', 'StoreCtrl', ['1', '2']);
Utils::addRoute('moreInfo', 'StoreCtrl');
Utils::addRoute('contact', 'StoreCtrl');
//store - buy
Utils::addRoute('buy', 'StoreCtrl', ['1','2']);

//bookadd,bookremove,userremove
Utils::addRoute('userDelete', 'AdminCtrl', ['1']); //user remove
Utils::addRoute('bookDelete', 'StoreCtrl', ['1']); //book remove
//userorder
Utils::addRoute('yourOrder', 'OrderCtrl', ['1','2']); //all orders owned by user
Utils::addRoute('orderInfo', 'OrderCtrl', ['1','2']); //info about selected order
//administration
Utils::addRoute('allOrders', 'OrderCtrl', ['1']); //all orders in the db
Utils::addRoute('userList', 'AdminCtrl', ['1']);  //all users registered
Utils::addRoute('userInfo', 'AdminCtrl', ['1']);  //see more details about user
Utils::addRoute('addBook', 'BookAddCtrl', ['1']); //adding new book to store
//info
Utils::addRoute('sendEmail', 'EmailCtrl');
