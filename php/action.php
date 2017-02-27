<?php
$name=$_POST['name'];
$surname=$_POST['surname'];
$secondName=$_POST['secondName'];
$date=$_POST['date'];
$SelectDate = htmlspecialchars($_POST['date']);
$SelectDate = date('Y/m/d', strtotime($SelectDate));


$sex=$_POST['sex'];
if ($sex=="1")
{
   echo 'male';
}
if ($sex=="0")
{
   echo 'female';
}
require 'conecting.php';

$sql  = "INSERT INTO `workers` (`id`, `lastname`, `firstname`, `secondName`,`sex`, `dateofbirth`) VALUES (NULL,'{$surname}' , '{$name}', '{$secondName}','{$sex}', '{$SelectDate}')";



if (mysql_query($sql))
{
echo "Table employees created successfully";
}
else
{
echo "Error creating table: " . mysql_error($selected);
}
echo "$sql";
header('Location: ../index.html');
 exit;
?>