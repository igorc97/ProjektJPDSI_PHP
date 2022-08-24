<?php

use core\App;
use core\Utils;
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
//store - buy
Utils::addRoute('buy', 'StoreCtrl', ['1','2']);

//bookadd,bookremove,bookedit

//useredit

//useroder

//administration



