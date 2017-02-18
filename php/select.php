<?php 
require 'conecting.php';
   $fio = "SELECT DISTINCT firstname, lastname, secondName,sex, dateofbirth  FROM  `workers`";

$result = mysql_query($fio);
// $fioresult = mysql_fetch_array($result);


 // print_r ("<option value=\"$fioresult[fio]\"> $fioresult[fio]</option>"); 
 //   while (($fioresult = mysql_fetch_array($fio)) !== false) 

 //   { 

 //      print_r ("<option value=\"$fioresult[fio]\"> $fioresult[fio]</option>"); 
 //   } 
function calculate_age($birthday) {
  $birthday_timestamp = strtotime($birthday);
  $age = date('Y') - date('Y', $birthday_timestamp);
  if (date('md', $birthday_timestamp) > date('md')) {
    $age--;
  }
  return $age;
}

function sex($sex){
if ($sex==1) return $sex = 'male';
if ($sex==0) return $sex = 'female';
}

$date = '1990-01-01';
print "<a href=\"../index.html\"> Вернуться на главную</a> ";
print "<TABLE width=\"755\" border=\"1\" bordercolor=\"#000000\" cellpadding=\"0\" cellspacing=\"1\" align=\"center\">
        <tr bgcolor=\"#0089CA\" align=\"center\" class=\"pr\">
    <td width=\"50\"><font color=\"#FFFFFF\" size=\"+1\">Имя</font></td>
    <td><font color=\"#FFFFFF\" size=\"+1\">Фамилия</font></td>
    <td width=\"50\"><font color=\"#FFFFFF\" size=\"+1\">Отчество</font></td>
      <td width=\"50\"><font color=\"#FFFFFF\" size=\"+1\">Пол</font></td>
    <td width=\"50\"><font color=\"#FFFFFF\" size=\"+1\">Год рождения</font></td>
    <td width=\"50\"><font color=\"#FFFFFF\" size=\"+1\">Возраст</font></td>
    </tr>";
while ($row=mysql_fetch_array($result))
{ // выводим данные
	$sex = sex($row['sex']);
	$age = calculate_age($row["dateofbirth"]);
 print '<tr> <td>'
 .$row['firstname']. '</td> <td>'  
 .$row['lastname'].'</td> <td>'
 .$row['secondName'].'</td> <td>'
 .$sex. '</td> <td>'
 .$row['dateofbirth'].'</td><td>'
 .$age.  '</td></tr>';

 
}
print "</table>"
?>