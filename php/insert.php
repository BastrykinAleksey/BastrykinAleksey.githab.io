

<?php
include 'function.php';
require 'conecting.php';
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

$filepath = 'C:\xampp\htdocs\testing\php\sales.csv';      ////путь к файлу        
$fo = fopen ($filepath, 'w') OR die ("Невозможно открыть $filepath"); ///открытие файла
 



for ($i=0; $i < 999900; $i++) { 
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

   writeCSV($fo,$line);
        $line=[];        ///обнуление массива
}
/////запись ста полей с именем на Ф
for ($i=0; $i < 100; $i++) {
	array_push($line, '');
    $a = rand(0, 4);
    array_push($line, $lastname[$a]);
    array_push($line, $firstnameF[$a]);
     $a = rand(0, 4);
    array_push($line, $secondName[$a]);
    array_push($line, $sex);
     $a = rand(0, 4);
    array_push($line, $SelectDate[$a]);

   writeCSV($fo,$line);
        $line=[];     
}


	////запись в БД
	$csv_open = fopen($filepath , "r") OR die ("Невозможно открыть $filepath");
 	$table = `workers`; 		// Имя таблицы для импорта
    $filename = $filepath; 	 	// Имя CSV файла, откуда берется информация 
    $delim=',';  				// Разделитель полей в CSV файле
    // $enclosed='';  				// Кавычки для содержимого полей
    $lineend='\n';   			// Чем заканчивается строка в файле CSV
   $query = "LOAD DATA INFILE 'C:/xampp/htdocs/testing/php/sales.csv' 
   INTO TABLE workers  
   character set utf8
   FIELDS TERMINATED BY '".$delim."' 
   LINES TERMINATED BY '".$lineend."'";
  if (mysql_query ($query)){
  	 fclose($fo);
	 echo "записи в таблицу добавлены";
	 print "<a href=\"../index.html\"> Вернуться на главную</a> ";
   }
   echo mysql_errno() . ": " . mysql_error() . "\n";

?>