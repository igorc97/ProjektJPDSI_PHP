<?php


namespace app\controllers;


class ResultsCtrl
{
    public function action_ResultsDB(){
try {
$database = new \Medoo\Medoo([
'database_type' => 'mysql',
'database_name' => 'bookstore',
'server' => 'localhost',
'username' => 'root',
'password' => '',
'charset' => 'utf8',
'collation' => 'utf8_polish_ci',
'port' => 3306,
'option' => [
\PDO::ATTR_CASE => \PDO::CASE_NATURAL,
\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
]
]);
$data = $database->select("wynik","*");
/*TODO:Skończyć kontroler*/

} catch (\PDOException $exception){
    getMessages()->addError("DB Error: ".$exception->getMessage());
}
}
}