<?php
require 'conecting.php';
$sql  = 'TRUNCATE TABLE `workers`'; ///запрос на очистку таблицы
mysql_query($sql);
header('Location: ../index.html');
exit;
?>