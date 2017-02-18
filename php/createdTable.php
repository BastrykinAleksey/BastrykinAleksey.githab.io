<?php
$host="localhost"; /*хост*/
$user="root"; /*Имя пользователя*/
$password=""; /*Пароль пользователя.не устанавливал*/
$db="test2"; /*Название базы данных*/

$dblink = mysql_connect($host, $user, $password); /*Подключение к серверу*/
if($dblink)
echo 'Соединение установлено.';
else
die('Ошибка подключения к серверу баз данных.');

$selected=mysql_select_db($db,$dblink); /*Подключение к базе данных на сервере*/
if($selected)
echo ' Подключение к базе данных прошло успешно.';
else
die(' База данных не найдена или отсутствует доступ.');

$sql  = "CREATE TABLE workers \n"

    . "(\n"

    . "id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, \n"

    . "lastname VARCHAR(20) collate utf8_bin NOT NULL,\n"

    . "firstname varchar(34) collate utf8_bin NOT NULL,\n"

    . "secondName VARCHAR(20)collate utf8_bin NOT NULL,\n"

    . "sex int(1),\n"

    . "dateofbirth DATE\n"

    . ")";
 
if (mysql_query($sql))
{
echo "Table employees created successfully";
}
else
{
echo "Error creating table: " . mysql_error($selected);
}
 header('Location: ../index.html');
 exit;
?>