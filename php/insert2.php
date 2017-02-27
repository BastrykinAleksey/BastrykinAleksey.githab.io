<?php
require 'conecting.php';
set_time_limit(190000);
ini_set('memory_limit', '4000M');
$sql2 = "set global max_allowed_packet=100000000";
mysql_query($sql2);
$sql  = "TRUNCATE TABLE `workers`"; ///очистка таблицы
mysql_query($sql);


  $firstname = array('Алексей', 'Андрей', 'Константин', 'Евгений', 'Вася', 'Петр'); 
  $firstnameF = ['Федот','Филипп','Флавий','Федор','Филимон'];
  $lastname= array('реофанов', 'козлов', 'иванов', 'кольбич', 'кирпун', 'леонидов');
  $secondName = array('Константинович', 'Васильевич', 'Иванов', 'Петрович', 'Вячеславович', 'Феодорович');
  $sex=1;
  $fedor='федор';
  $SelectDate = array('2000-02-01','2013-02-01','2017-12-01','1989-02-08','2001-12-02','2017-02-01','1000-12-01');

$line = []; 
$data=[];
$allData = [];
$bufferData = [];
$count = 0;


  for ($i=0; $i < 999900; $i++) { 
  	$count++;
	array_push($line, '');              /// поле для id
  	$a = rand(0, 4);                    ///рандомное присваивание значения
    array_push($line, $lastname[$a]);     
    $a = rand(0, 4);                    ///рандомное присваивание значения
    array_push($line, $firstname[$a]);
    $a = rand(0, 4);                    ///рандомное присваивание значения
    array_push($line, $secondName[$a]); 
    array_push($line, $sex);
    $a = rand(0, 4);                    ///рандомное присваивание значения
    array_push($line, $SelectDate[$a]);

foreach ($line as $one) {
    	$data[] = "'" . addslashes($one) . "'";
    }

 $data = implode(",", $data);
 array_push($bufferData,$data);
 $data= [];
 $line= [];
  ///обнуление массивов
}

for ($i=0; $i < 100; $i++) { 
  	$count++;
	array_push($line, '');              /// поле для id
  	$a = rand(0, 4);                    ///рандомное присваивание значения
    array_push($line, $lastname[$a]);     
    $a = rand(0, 4);                    ///рандомное присваивание значения
    array_push($line, $firstnameF[$a]);
    $a = rand(0, 4);                    ///рандомное присваивание значения
    array_push($line, $secondName[$a]); 
    array_push($line, $sex);
    $a = rand(0, 4);                    ///рандомное присваивание значения
    array_push($line, $SelectDate[$a]);

foreach ($line as $one) {                           
    	$data[] = "'" . addslashes($one) . "'";
    }

 $data = implode(",", $data);
 array_push($bufferData,$data);
 $data= [];
 $line= [];
  ///обнуление массивов
}




foreach ($bufferData as $one) {           ///// делаем из массива строку
    	$allData[] = "(" . ($one) . ")";
    }
 $bufferData = [];
 $allData = implode(",", $allData);
 

$sql  = "INSERT INTO `workers` (`id`, `lastname`, `firstname`, `secondName`,`sex`, `dateofbirth`) VALUES $allData";
if (mysql_query($sql))
{
echo "Table employees created successfully";
}
else
{
echo "Error creating table: " . mysql_error($selected);
}
echo $count;
$allData = [];

header('Location: ../index.html');
 exit;
?>