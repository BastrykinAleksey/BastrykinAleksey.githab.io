<?php
require 'conecting.php';
  $firstname = array('алексей', 'андрей', 'дедор', 'моня', 'вася', 'петя'); 
  $secondName= array('реофанов', 'козлов', 'иванов', 'кольбич', 'кирпун', 'леонидов');
  $lastname = array('впаывпа', 'Васильевич', 'Иванов', 'Петрович', 'Вячеславович', 'Феодорович');
  $sex=1;
  $fedor='федор';
  $SelectDate = array('2017-02-01','2013-02-01','2017-12-01','2017-02-08','2017-12-02','2017-02-01','2017-12-01');
for ($y=0; $y<5; $y++) {
	
	for ($i=0; $i<1980; $i++) {
	$sql  = "INSERT INTO `workers` (`id`, `lastname`, `firstname`, `secondName`,`sex`, `dateofbirth`) VALUES (NULL, '{$lastname[$y]}', '{$firstname[$y]}', '{$secondName[$y]}','{$sex}', '{$SelectDate[$y]}')";
  mysql_query($sql);
// if (mysql_query($sql))
// {
// echo "Table employees created successfully";
// }
// else
// {
// echo "Error creating table: " . mysql_error($selected);
// }
}
}
for ($x=0; $x<20; $x++) {
for ($y=0; $y<5; $y++) {
$sql  = "INSERT INTO `workers` (`id`, `lastname`, `firstname`, `secondName`,`sex`, `dateofbirth`) VALUES (NULL, '{$lastname[$y]}', '{$fedor}', '{$secondName[$y]}','{$sex}', '{$SelectDate[$y]}')";
mysql_query($sql);
// if (mysql_query($sql))
// {
// echo "Table employees created successfully";
// }
// else
// {
// echo "Error creating table: " . mysql_error($selected);
// }

}}
////SELECT COUNT(1) FROM `workers`
////SELECT * FROM `workers` WHERE firstname LIKE "ф%"
///TRUNCATE TABLE `workers` 
///SELECT DISTINCT firstname, lastname, secondName FROM `workers`
header('Location: index.html');
exit;
?>