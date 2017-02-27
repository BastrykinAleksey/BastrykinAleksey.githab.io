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
////999900
// for ($j=0; $j <5 ; $j++) { 
// 	# code...

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

// foreach ($line as $one) {                           
//      $data[] = "'" . addslashes($one) . "'";
//     }

 $line = implode(",", $line);
 array_push($bufferData,$line);
 $data= [];
 $line= [];
  ///обнуление массивов
}

foreach ($bufferData as $one) {           ///// делаем из массива строку
      $allData[] = "(" . ($one) . ")";
    }
 $bufferData = [];
 $allData = implode(",", $allData);
echo $allData;


?>