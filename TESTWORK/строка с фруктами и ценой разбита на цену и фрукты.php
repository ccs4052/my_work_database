<?php           //сделать что-бы сумировалось 40 + 50
$a = 'banan$40apple$50';
$fruit1=substr($a,0,5);
$fruit2=substr($a,8,5);
$b=array($fruit1,$fruit2);
$price1=substr($a,6,2);
$price2=substr($a,14,2);
$fruit = array($fruit1,$fruit2);
$price = array($price1,$price2);
echo "<pre>";
print_r ($a);
echo "<pre>";
echo "<pre>";
print_r ($fruit);
echo "<pre>";
echo "<pre>";
print_r ($price);
echo "<pre>";
function cost($n, $m){
    return ("$n стоит - $m");
}
$g = array_map("cost", $fruit, $price);
echo "<pre>";
print_r ($g);
echo "<pre>";
echo "Сумма покупки ="." ".array_sum($price)." "."\$";
$grn = (array_sum($price))*24;
echo "<pre>";
echo "Сумма покупки (в гривне) ="." ".$grn." ".грн;
echo "<pre>";
//setType($a, 'integer');
//echo gettype($a);
/*$b = $a[6].$a[7];
echo $b;
$c = $a[14].$a[15];
echo $c;
$y=$b+$c;
$p = $b.$c.$y;
$y=str_split($p);
print_r($y);
/*$a = str_split($a);
echo '<pre>';
print_r ($a);
echo '</pre>';
*/
//settype($g, integer);
//echo $g;



?>



