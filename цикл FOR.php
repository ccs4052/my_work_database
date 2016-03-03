<?php
/*if($a < 30){
	echo "$a меньше 30.";
}

else{
	echo "$a больше 30.";
}
switch($a){
	/*case 16:
	echo "Вам 16 лет";
	break;
	case 18:
	echo "Вам 18 лет";
	break;
	default:
	echo "Вам $a лет";
}*/
/*i = 1;
do{
	echo "$i <br/>";
	$i++;
}
while($i <= 10);*/
for($i =1; $i <= 10; $i++){
	echo "$i <br/>";
}
?>


-------------
<?php
echo 'Перед циклом<br>';
for($x =1; $x < 10; $x++) {
    echo $x.'<br>';              //выводит  9 раз
}
echo 'После цикла';

?>

---------------
<?php
echo 'Перед циклом<br>';
for($x =1; $x <= 10; $x++) {
    for ($y = 1; $y <=20; $y++){
        echo $x.':'.$y.'<br>';        ...............выводит X 10 раз и Y 20 раз
    }
}
echo 'После цикла';
?>
--------------------

------------------Таблица с помощью цикл FOR и условия IF
фон таблици одним цветом - выделяем ячейку определенную другим цветом
<?php
$x =5;
$y = 10;
echo '<table border="1" align="center">';
for ($i=1; $i<= $x; $i++){
    echo "\t<tr style = 'background-color:#1234cc'>\n";
    for ($a=1;$a<=$y;$a++){
        if ($i ==3 && $a==3)
        echo "\t\t<td style = 'background-color: #9371bb'>5</td>\n";
        else
            echo "<td>".$x*$y."</td>";
    }
    echo "\t</tr>\n";
}
echo "</table>";
?>

