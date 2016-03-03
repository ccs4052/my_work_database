<?php
$a = array('100 G','230mb','198    Kb');
function convert($value) {	//функция конвертирования
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


---------------- или так другой пример 
<?php //берем значение директивы php и присваиваем ей другое значение ( к килабайтах)
$a =ini_get(post_max_size); //8m
$letter = $a{strlen($a)-1}; //(m) вытаскиваем из переменной $a значение последнего символа ( там может быть m или g) в зависимости от размера
$a = (integer)$a;//8
switch($letter){
	case 'g': $a *=1024;
	case 'm': $a *= 1024;
	case 'k': $a *= 1024;
	}
echo 'POST_MAX_SIZE = '.$a.'bytes';
?>