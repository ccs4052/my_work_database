<?php
$a = array('100 G','230mb','198    Kb');
function convert($value) {
$num = (int)$value;
$result = $num;
if ($num > 0) {
$key_word = strtolower(trim(implode(',', array_filter(explode((int)$value, $value)))));
switch ($key_word) {
case 'g':
$result *= 1024;
case  'mb' :
$result *= 1024;
case  'kb':
$result *= 1024;
break;
default :
return 'Unknown format';
}
}
return $result . 'b in ' . $value;
}

foreach($a as $value){
echo convert($value).'</br>';
}
?>