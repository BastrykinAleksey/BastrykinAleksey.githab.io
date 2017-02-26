<?php
require 'conecting.php';
$sql  = "alter table workers add index i_name (firstname)";
if(mysql_query($sql))
	echo "table optimized :)";
	else echo "fail :(";
print "<a href=\"../index.html\"> Вернуться на главную</a> ";
?>