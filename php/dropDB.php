
<?php
   require 'conecting.php';
$sql  = 'DROP DATABASE test2';
mysql_query($sql);
header('Location:../index.html');
exit;
?>