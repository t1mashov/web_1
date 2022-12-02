<?php

define('DB_HOST', 'localhost'); //Адрес
define('DB_USER', 'mysql'); //Имя пользователя
define('DB_PASSWORD', 'mysql'); //Пароль
define('DB_NAME', 'rk2'); //Имя БД

$connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$connect->set_charset('utf-8');

?>