<?php
require 'conecting.php';
// инициализировали счётчики
$sqlCount = 0;
$sqlTime = 0;
$sql  = 'TRUNCATE TABLE `workers`';
$timeStart = microtime( TRUE);
mysql_query($sql);
$sqlTime += microtime( TRUE) - $timeStart;
$sqlCount++;

// Итоги
printf( '%d запросов за %01.2f секунд.', $sqlCount, $sqlTime);
sleep(10);
header('Location: ../index.html');
exit;

?>