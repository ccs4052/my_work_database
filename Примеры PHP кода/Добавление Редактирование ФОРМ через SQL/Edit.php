<?php
session_start();     //<!--ФОРМА НА РЕДАКТИРОВАНИЕ ЗАПИСЕЙ - редактирование обычно делают с кнопкой с сылкой на другую страницу а там потом переадресацию при исправлении обратно-->
define ('DB','localhost');
define ('DBLOGIN','user');
define ('DBPASS','111');
define ('DBNAME','bogdan');
$connect = mysqli_connect(DB,DBLOGIN,DBPASS,DBNAME) or die(mysqli_error());
mysqli_set_charset($connect,'utf8');
$news = mysqli_query($connect,"SELECT *FROM news WHERE id = ".(int)$_GET['id']." LIMIT 1") or exit(mysqli_errno());   //LIMIT 1 указали потому что нам нужна только одна запись по нашему запросу для более быстрого запроса
if(!mysqli_num_rows($news)) {    //проверка на то существует ли запись по данному запросу $news
    $_SESSION['info'] = 'Данной новости не существует!';
    header("Location: BD test.php");
    exit();
}
$row = mysqli_fetch_assoc($news);
if(isset($_POST['title'])){
    $row['title'] = $_POST['title'];} // Проверка если ввели данные до выводим их если не ввели то выводим то что было получено в форме из нашего запроса

if(isset($_POST['edit'] , $_POST['text'] , $_POST['description'] , $_POST['title'] , $_POST['cat'])){   //проверка если кнопка нажата то проводим Изменения данных в данной строке таблици
    foreach($_POST as $k=>$v) {
        $_POST[$k] = trim($v);  //убираем пробелы у всех элементо глоб массива $_POST
    }
    mysqli_query($connect, "UPDATE news SET
                cat         = ".mysqli_real_escape_string($connect,$_POST['cat']).",
                title       = ".mysqli_real_escape_string($connect, $_POST['title']).",
                text        = ".mysqli_real_escape_string($connect, $_POST['text']).",
                description = ".mysqli_real_escape_string($connect, $_POST['description'])."
                WHERE id = ".$_GET['id']." ") or exit(mysqli_error());
    $_SESSION['info'] = 'Запись была изменена';
    header('Location: BD test.php');
    exit();
}

?>


<div style="padding-top:20px; padding-bottom:20px;">               <!-- Делаем что-бы набписи которые содержаться в массиве $row нашего запроса выводились в положеных местах в форме  -->
    <form action="" method="post">
        <div>
            Заголовок новости: <input type="text" name="title" value="<?php echo htmlspecialchars($row['title']); ?>">
        </div>
        <div>
            Категория новостей: <input type="text" name="cat" value="<?php echo htmlspecialchars($row['cat']); ?>">
        </div>
        <div>
            Описание новости: <br>
            <textarea name="description"><?php echo htmlspecialchars($row['description']); ?></textarea>
        </div>
        <div>
            Полный текст новости: <br>
            <textarea name="text"><?php echo htmlspecialchars($row['text']); ?></textarea>
        </div>
        <input type="submit" name="edit" vаlue="Отредактировать новость">
    </form>
</div>