<?php
session_start(); // открываем ссесию
define('FN', 'gd.txt');   //создадим константу с именем "FN" и второе значение это имя нашего файла
if($_POST['submit']){  //проверяем нажата ли кнопка 'submit'
	$name =trim(htmlspecialchars($_POST['name'])); //(функция trim уберает пробелы перед и после введенным словом в поле Имя )   htmlspecialchars(добавлено для безопасности(обезопасит нас от исполнения HTML кода пользователем в браузере в местах заполнения например)) указываем имя поля "Имя"
	$txt = trim(htmlspecialchars($_POST['txt'])); //указываем имя поля "Cообщение"
	$str = $name.'||'.$txt."\r\n"; //создаем переменую $str которая будет склеивать переменую $name и $txt и что-бы каждая запись переносилась на новую строку добавляем запись "\r\n"

	if(file_put_contents(FN, $str, FILE_APPEND)){ //открываем файл функцией file_put_content (FN (имя константы с именем файла) ($str в этой переменной лежит текст) (FILE_APPEND) дает разрежение на дописывание файла)
		$_SESSION['res'] = 'Добавлено!';            //создадим сессионную переменную и присваиваем ей значение () Добавлено )
		header("Location: GestBook.php");       // Делаем редирект что-бы избавиться от проблемы обновления страницу
		exit; //завершаем работу скрипта
	}
}
echo $_SESSION['res'];   // выведем сессионую переменную $_SESSION['res']
unset ($_SESSION['res']); //разрегестрируем сессию что-бы он выводилась 1 раз
session_destroy (); // закроем сессию физически удалим фаил сесии с сервера
?>


<form method="post">
 Имя*: <br/>                 <!-- * показывает было ли что-то введено-->
 <input type="text" name="name" /><br />
 Сообщение*: <br />          <!-- * показывает было ли что-то введено-->
 <textarea name="txt" cols="30" rows="5"></textarea> <!-- 30 колонок и 5 строчек-->
 <input type="submit" name="submit" value="Добавить" /> <!--кнопка добавить-->
</form>
<hr /> <!-- отчертим линией что-бы было понятнее Далее выводим то что написали в файле -->
<?php
function arr($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}                      //создадим функцию arr которая будет распичатывать массив $arr
if(!file_exists(FN)) exit;              // проверить существует ли файл который мы хотим прочитать (FN) константа которая содержит название файла

$read = file(FN);
//arr($read); //вызовим созданую нами функцию и на вход ей подадим массив $read
// теперь наши имя и сообщение внесено в массив $read и омеет свой ключ
foreach($read as $item){    //пробегаем по массиву $read
	$msg[] = explode('||', $item); //explode разбивает строку на элементы
}
$count = count($msg); // смотрим сколько элементов в массиве $msg и поместим в переменную
for($i = 0; $i < $count; $i++){   //переменную количества массива поместим в цикл а затем выводи разные данные многомерного массива $i номер массива [0] ключь первой ячейки массива
	echo '<div style="border:1px solid #ccc">'; //заключим каждое сообщение в блок
	echo '<p>'.$msg[$i][0].'</p>';
	echo '<p>'.$msg[$i][1].'</p>';
	echo '</div>';
}            
//arr($msg); //выводим новый массив $msq
?>
