<?php 
require 'conecting.php'; ///подключение к серверу и выбор БД
include 'function.php';  ///подключения файла с основными функциями
$fio = "SELECT DISTINCT firstname, lastname, secondName,sex, dateofbirth  FROM  `workers` ORDER BY firstname"; //Запрос 
$result = queryTime($fio);
printQuery($result);
?>
