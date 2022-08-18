<?php

use core\App;
use core\Utils;
//default routes
App::getRouter()->setDefaultRoute('main'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)
Utils::addRoute('main', 'MainCtrl', ['1', '2']);


Utils::addRoute('store',    'StoreCtrl', ['1', '2']);

//login/logout 
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
//registration
Utils::addRoute('register', 'RegistrationCtrl');
Utils::addRoute('registerShow', 'RegistrationCtrl');


//Utils::addRoute('personNew',     'PersonEditCtrl',	['user','admin']);
//Utils::addRoute('personEdit',    'PersonEditCtrl',	['user','admin']);
//Utils::addRoute('personSave',    'PersonEditCtrl',	['user','admin']);
//Utils::addRoute('personDelete',  'PersonEditCtrl',	['admin']);

