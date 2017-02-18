<?php
require 'conecting.php';
$sql  = 'TRUNCATE TABLE `workers`';
mysql_query($sql);
header('Location: ../index.html');
exit;

?>