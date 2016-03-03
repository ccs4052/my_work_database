<form method="post">
 Имя: <br/>
 <input type="text" name="name" /><br />
 Сообщение: <br />
 <textarea name="text" cols="30" rows="5"></textarea> <!-- 30 колонок и 5 строчек-->
 <input type="submit" name="submit value="Добавить" />
 </form>
 
 --Обработка формы записывам данные в файл
 define("USERS_LOG","users.log");         //создадим константу в которой будем хранить записи
if($_SERVER["REQUEST_METHOD"]=="POST"){  // проверяем приходили нам даные из формы или нет
    $fn = trim(strip_tags($_POST["fname"]));
    $ln = trim(strip_tags($_POST["lname"]));
    $user = "$fn $ln\n";
    file_put_contents(USERS_LOG,$user,FILE_APPEND); // помещаем содержимое переменных в файл
    header("Location: test.php");  //переадресация на эту же страницу что-бы не накидали нам лишнего через F5
    exit;
}

// выводим содержимое файла на экран

if(file_exists(USERS_LOG)){    // проверка если файл существует то выполняем действие
    $users = file(USERS_LOG);  //зачитываем файл
    if(is_array($users)){
        $users = array_reverse($users); // переварачиваем массив наоборот что-бы выводить масив с конца
        echo "<ol>";                 //выводим что-бы списки номеровались
        foreach($users as $user){
            echo "<li>$user<li>";
        }
        echo "</ol>";
    }
}