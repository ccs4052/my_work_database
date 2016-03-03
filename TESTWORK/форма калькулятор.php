<?php      // сделать калькулятор 3 входящих параметра. 1 - число. 2-число. 3-действие (плюс минус умножить поделить)
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');
function calc($num1,$num2,$action){

}

calc($_POST['num1'],$_POST['num2'],$_POST['action']); //получаем в функцию не обработанные данные из формы (если нужно обработать нада будет засовывать их в переменную и обрабатывать)

?>
<form>
<input type="text" name="num1">
<input type="text" name="num2">
<input type="text" name="action">
</form>

