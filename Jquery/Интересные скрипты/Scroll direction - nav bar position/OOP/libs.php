<?php
include_once "./config/Autoload.php";
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $gbook = new Guestbook();          //создаем объект класса
    $gbook ->Insert($name,$email,$msg);  //передаем в метод класса параметры для сохранения в БД
    header("Location: index.php");
}

