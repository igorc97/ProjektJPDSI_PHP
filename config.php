<?php
$conf->debug = true;

$conf->server_name = 'localhost';
$conf->protocol = 'http';
$conf->app_root = '/projektPHP/public';
//$conf->action_root = $conf->app_root.'/calckred.php?action=';

//$conf->action_url = $conf->server_url.$conf->action_root;
//$conf->app_url = $conf->server_url.$conf->app_root;
//$conf->root_path = dirname(__FILE__);

$conf->db_type = 'mysql';
$conf->db_server = 'localhost';
$conf->db_name = 'mydb';
$conf->db_user = 'root';
$conf->db_pass = '';
$conf->db_charset = 'utf8';

$conf->db_port = '3306';
$conf->db_option = [PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

