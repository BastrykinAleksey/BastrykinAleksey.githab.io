<?php
$host="localhost"; /*хост*/
$user="root"; /*Имя пользователя*/
$password=""; /*Пароль пользователя.не устанавливал*/
$db="test2"; /*Название базы данных*/

$dblink = mysql_connect($host, $user, $password); /*Подключение к серверу*/
if($dblink)
echo 'Соединение установлено.<br>';
else
die('Ошибка подключения к серверу баз данных.<br>');

// $selected=mysql_select_db($db,$dblink); /*Подключение к базе данных на сервере*/
// if($selected)
// echo ' Подключение к базе данных прошло успешно.<br>';
// else
// die(' База данных не найдена или отсутствует доступ.<br>');
// mysql_query("SET NAMES 'utf8';");
// mysql_query("SET CHARACTER SET 'utf8';");
// mysql_query("SET SESSION collation_connection = 'utf8_general_ci';");
?>

