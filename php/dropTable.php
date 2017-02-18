<?php
   require 'conecting.php';
$sql  = 'DROP TABLE workers';
mysql_query($sql);
header('Location: ../index.html');
exit;
?>
