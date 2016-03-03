<?php
$i = range(1,100);
function num1($a){
    return ($a % 2);
}
function num2($a){
    return(!($a % 2));
}
echo "<pre>";
print_r(array_filter($i, "num1"));
echo "</pre>";
echo "<pre>";
print_r(array_filter($i, "num2"));
echo "</pre>";
$h=array_filter($i, "num1"); //если бы повторялись элементы
print_r ($h);
?>