<?php
$a = 'apple$50banan$40kartoxa$30byryak$9';
$g = explode ("$", $a);
$j=array_sum($g);
$k = strlen($a);   //считает количество символов строки
for($i=0; $i<$k; $i++)
{
    is_numeric($a[$i]) ? $num .= $a[$i] : $str .= $a[$i]; //распределяет строчные элементы в один массив цифровые элементы в другой
}

$new = explode ("$", $str);
echo "Наименования";
echo "<pre>";
print_r ($new);
echo "</pre>";
echo "<pre>";
echo "Сумма покупки =".$j."грн";
echo "</pre>"
?>











