<?php
header("Content-Type:text/html; charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/hrml;charset=utf-8"/>
<?php
 
//основные операторы
//оператор присваивания "="
$firstName = " имя ";
$lastName = " фамилия ";
$fullName = $firstName . $lastName;  //оператор конкатенации

$fullName = $firstName . " - " . $lastName; //изменили выводы. Почему 

echo $fullName;
//условные операторы
//if

echo '</br> ============================================ </br>';

$a = 6;
$b = 5;
if ($a == $b) {
echo 'A равно B';
} else {
 echo 'A не равно B';
} 



echo '</br> ============================================ </br>';

$c = 10;
$d = 5;

if ($a == $b) {
echo 'A равно B';
} elseif ($a == $c) {
echo 'A равно C';
} elseif ($a == $d) { 
echo 'A равно D';
} else {
echo 'A ничему не равно';
}

echo '</br> ============================================ </br>';

switch ($a) {
case $b:
echo 'A равно B';
break;
case $c:
echo 'A равно C';
break;
case $d:
echo 'A равно D';  
break;
default:
echo 'A ничему не равно ';
break;
}
echo '</br> ============================================ </br>';
for ($i = 1; $i < 101; $i = $i + 1) {
    echo $i . '<br>';
}


echo '</br> ============================================ </br>';
$i = 1;
while ($i < 101) {
    echo $i . '<br>';
    $i = $i + 1;
}
echo '</br> ============================================ </br>';
$myArray = array('Привет', 'Мир!',
        'родился', 'новый','программист');
 foreach ($myArray as $value) {
 echo $value . '<br>';
        }
        //Изучали синтаксис