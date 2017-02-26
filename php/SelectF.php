<?php
require 'conecting.php';
include 'function.php';
$fio = "SELECT * FROM `workers` WHERE firstname LIKE 'Ф%' ORDER BY firstname";
$result = queryTime($fio);
printQuery($result);
?>