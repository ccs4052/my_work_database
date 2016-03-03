<?php
define('DB_HOST', 'localhost');   //подключени€ помещ€ем в константы дл€ уобства (им€ сервера храним в этой константе)
define('DB_USER', 'user');     //во второй константе храним им€ юзера
define('DB_PASS', '111');    //тут храним пароль
define('DB_NAME', 'bogdan');  //тут храним им€ базы данных
mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("нет подключени€ к серверу");
mysql_select_db(DB_NAME) or die("невозможно выбрать Ѕƒ");
mysql_query("SET NAMES utf8") or die("не установлена кодировка");
?>