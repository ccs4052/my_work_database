<?php
session_start();
include_once "./config.php"; //файл с нашими настройками и константами
include_once "./default.php";  //файл с функциями
$connect = mysqli_connect(DB,DBLOGIN,DBPASS,DBNAME) or die(mysqli_error());
mysqli_set_charset($connect,'utf8');
if(isset($_POST['submit']) && $_POST['name'] && $_POST['pass'] && $_POST['passr'] && (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))){
    $_POST = m_r_e_sAll($_POST); //функции на фильтры наход в default.php
    $_POST = trimAll($_POST);
    $_POST = htmlAll($_POST);
    $login= $_POST['name'];
    $pass = $_POST['pass'];
    $passr = $_POST['passr'];
    $email = $_POST['email'];
    if(mb_strlen($login)< 2){
        $_SESSION['info'] = 'Логин слишком маленький';
        header("Location: ../Registr.php");
    }elseif (mb_strlen($login) > 16) {
        $_SESSION['info'] = 'Логин слишком длинный';
        header("Location: ../Registr.php");
    }
    if(mb_strlen($pass) < 5){
        $_SESSION['info'] = 'Пароль должен быть длиннее 4 символов';
        header("Location: ../Registr.php");
    }
    if($pass == $passr){
        $pass = md5($pass);    //зашифрованный пароль можно использ функцию зашифровки в default myHash
    } else{
        $_SESSION['info'] = 'Пароль не правельный';
        header("Location: ../Registr.php");
    }
    if(!count($_SESSION['info'])){        //проверка на существование одинаковых логинов в БД
        $res = q("SELECT id FROM capons WHERE login = '".$_POST['name']."'");
        if(mysqli_num_rows($res)){
            $_SESSION['info'] = 'такой логин уже существует';
            header ("Location: ../Registr.php");
        }
    }
    if(!count($_SESSION['info'])){
        $res = q("SELECT id FROM capons WHERE email = '".$_POST['email']."'");
        if(mysqli_num_rows($res)){
            $_SESSION['info'] = 'такой email уже существует';
            header ("Location: ../Registr.php");
        }
    }
    if(!count($_SESSION['info'])) {
    $res = q("INSERT INTO capons VALUES ('','$login','$pass','$email','','".md5($_POST['login'])."','1')");    //функция q отправляет запрос - а последнее поле в отправке данных в ТБ нада для проверки активации акка
        //$_SESSION['info'] = 'вы успешно зарегестрированы';
        $id = mysqli_insert_id($connect); //функция возвращает ID последнего добавленного элемента в БД - что-бы передать ID для проверки активации
        Mail::$to = $_POST['email'];              //класс Mail вызываеться из папка class Mail  - функцией в файле default
        Mail::$subject = 'Вы зарегестрировались на сайте';
        Mail::$text = '....То пройдите по ссылке для активации:'.DOMAIN.'regcheck.php?hash='.
        md5($_POST['login']).'&id='.$id.''; //передем ID полученый из нашего добавленного пользавателя и отправляем через GET для проверки
        Mail::send();
        header("Location: ../index1.php");
        exit(); // проверка отпраки почты ниже
    }
    /*else {
        $_SESSION['info'] = 'вы прошли по неверной ссылке';
        header ("Location: ../Registr.php");
    }*/
}
if(isset($_GET['hash'], $_GET['id'])) {            //проверка на активацию почты получаем через GET по ссылке ( проверку если не будет раб нада поместить в файл Registr.php
    q("UPDATE capons SET active='1' WHERE id = ".(int)$_GET['id']." AND hash='".m_r_e_sAll($_GET['hash'])."'") or die (msqli_error($connect)); // m_r_e_s функция на экранировку спец символов
    $_SESSION['info'] =  'вы успешно активировали свой аккаунт';
    header ("Location: ../index1.php");
    //$_SESSION['info'] = 'вы активны на сайте';
    //header ("Location: ../Registr.php");
}




--------------------- ПРОВЕРГА НА Вход на сайт


session_start();
include_once "./config.php"; //файл с нашими настройками и константами
include_once "./default.php";
$connect = mysqli_connect(DB,DBLOGIN,DBPASS,DBNAME) or die(mysqli_error());
if (isset($_POST['name1'],  $_POST['pass1'])) {
    $_POST = m_r_e_sAll($_POST); //функции на фильтры наход в default.php
    $_POST = trimAll($_POST);
    $_POST = htmlAll($_POST);
    $e_login = $_POST['name1'];
    $e_pass = md5($_POST['pass1']);
    $query = mysqli_query($connect,"SELECT * FROM capons WHERE login='$e_login' AND pass='$e_pass' AND active = 1 LIMIT 1") or die (mysqli_error()) ;
    if(mysqli_num_rows($query)){
        $_SESSION['user'] = mysqli_fetch_assoc($query); //помещаем ассацитивный массив в Сесионую перемую
        $_SESSION['info'] = 'вы успешно вошли';
        header("Location: ../index1.php");
    }else {
        $_SESSION['info'] = 'неверный логин или пароль';
        header("Location: ../index1.php");
    }
}
if (isset($_POST['logout'])){
    unset ($_SESSION['user']);
    $_SESSION['info']= 'вы успешно вышли';
    header("Location: ../index1.php");
    exit();
}