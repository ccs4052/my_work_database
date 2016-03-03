<?php
session_start();
define ('DB','localhost');
define ('DBLOGIN','user');
define ('DBPASS','111');
define ('DBNAME','bogdan');
$connect = mysqli_connect(DB,DBLOGIN,DBPASS,DBNAME) or die(mysqli_error());
mysqli_set_charset($connect,'utf8');
if(isset($_POST['add'] , $_POST['text'] , $_POST['cat'] , $_POST['description'] , $_POST['title'])){
    foreach($_POST as $k=>$v){    //с помощью цикла обработали все эдементы массива функцией trim ( но ради безопасности серьезными проверками лучьше не пользываться в Foreach а писать в ручную
        $_POST['$k'] = trim($v);
    }
    $cat =($_POST['cat']);
    $cat = htmlspecialchars($cat);
    $cat = mysqli_real_escape_string($connect,$cat);
    $title =($_POST['title']);
    $title = htmlspecialchars($title);
    $text = ($_POST['text']);
    $text = htmlspecialchars($text);
    $description = ($_POST['description']);
    $description = htmlspecialchars($description);
    $date = date('Y-m-d');
    mysqli_query ($connect, "INSERT INTO news VALUES ('','$date','$title','$cat','$text','$description','','','')") or exit(mysqli_error());
    $_SESSION['info'] = 'Запись успешно добавлена';
    header('Location: BD test.php');
    exit();

}
if(isset($_GET['action']) && $_GET['action'] == 'delete'){                   //условие на удаление записи из блока новостной ленты
    mysqli_query($connect, "DELETE FROM news WHERE id = ".$_GET['id']."");
    $_SESSION['del'] = 'Новость была удалена';
    header("Location: BD test.php");
    exit();
}
if(isset($_POST['delete'])) {   //вроверка на удаление Чекбоксом! в переменной $_POST сожержиться значение с массивом['ids'] которій нада удалить
    /*foreach($_POST['ids'] as $k=>$v){
        mysqli_query($connect, "DELETE FROM news WHERE id = ".$v."");
        $_SESSION['delb'] = 'Новость была удалена';
        header("Location: BD test.php");
    }*/
    $ids = implode(',',$_POST['ids']);                //удаление нескольких выделенных надписей Чекбоксом
    mysqli_query($connect, "DELETE FROM news WHERE id in (".$ids.")") or exit (mysqli_error());
    $_SESSION['delb'] = 'Новость была удалена';
    header("Location: BD test.php");
    exit();
}

