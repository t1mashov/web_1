<?php

define('DB_HOST', 'localhost'); //Адрес
define('DB_USER', 'mysql'); //Имя пользователя
define('DB_PASSWORD', 'mysql'); //Пароль
define('DB_NAME', 'web1'); //Имя БД

$mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
//$mysql->set_charset('utf-8');

?>