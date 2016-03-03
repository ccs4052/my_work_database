<?php
$num = 10;
for($i = 0; $i < $num; $i++){
    $array[$i] = rand (1,10);
}

echo "<pre>";
print_r (array_unique($array));
echo "</pre>";


$a = count($array); //количество ячеек массива -1
for ($i = $a; $i>=0; $i--){
    for ($k = 0; $k<=($i-1); $k++)
        if ($array[$k]>$array[$k+1]) {
            $p = $array[$k];                  ////$p это временная ячейка которая комогает поменять местами  значение $array[$k] и значения $array[$k+1]
            $array[$k] = $array[$k+1];
            $array[$k+1] = $p;
        }
}?>
<hr>
<?php
echo "Сортировка элементов массива \"Пузырьковым метадом\"";
echo "<p>";
for ($i = 0; $i<$a; $i++) {
    echo $array[$i];
}
?>





-------------------------------- СОРТИРОВКА ПУЗЫРЬКОВЫМ ТИПОМ ЦИФЕР С 2 числами ЧЕТНЫМИ И НЕЧЕТНЫМИ

<?php
$num = 10;
for($i = 0; $i < $num; $i++){
    $array[$i] = rand (1,10);
}
function num1($q){               // функция для сортировки четніх чисел
    return ($q % 2);
}
function num2($q){               //функция для сортировки не четных чисел
    return (!($q % 2));
}
echo "<pre>";
print_r ($array);
echo "</pre>";
$first = array_filter($array, "num1");   // новый массив отсортированый под четные числа
echo "<pre>";
print_r ($first);
echo "</pre>";
$second = array_filter($array, "num2");  // массив отсортированый под не четные числа
echo "<pre>";
print_r ($second);
echo "</pre>";


$a = count($array);                   //сортировка пузырьковым методом четных чисел
for ($i = $a; $i>=0; $i--){
    for ($k = 0; $k<=($i-1); $k++)
        if ($first[$k]>$first[$k+1]) {
            $p = $first[$k]; 
            $first[$k] = $first[$k+1];
            $first[$k+1] = $p;
        }
}
$w = count($array);                 // сортировка пузырьковым методом не четных чисел
for ($i = $w; $i>=0; $i--) {
    for ($k = 0; $k <= ($i - 1); $k++)
        if ($second[$k] > $second[$k + 1]) {
            $p = $second[$k]; 
            $second[$k] = $second[$k + 1];
            $second[$k + 1] = $p;
        }
}
?>
<hr>
<?php
echo "Сортировка элементов массива \"Пузырьковым метадом\"";
echo "<p>";
for ($i = 0; $i<$a; $i++) {
    echo $first[$i];
}
echo ":";
for ($i =0; $i<$a; $i++){
    echo $second[$i];
}
?>