<?php
   require 'conectingServer.php';
// $dataBaseName=$_POST['name'];
    // if (mysql_create_db("$dataBaseName")) {
    //     print ("Database created successfully\n");
    // } else {
    //     printf ("Error creating database: %s\n", mysql_error());
    // }
   $dataBaseName = "test2";
    $sql = 'CREATE DATABASE '.$dataBaseName;
mysql_query($sql);
header('Location: ../index.html');
exit;
?>