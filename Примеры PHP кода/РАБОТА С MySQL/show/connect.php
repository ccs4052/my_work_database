<?php
define('DB_HOST', 'localhost');   //ïîäêëþ÷åíèÿ ïîìåùÿåì â êîíñòàíòû äëÿ óîáñòâà (èìÿ ñåðâåðà õðàíèì â ýòîé êîíñòàíòå)
define('DB_USER', 'user');     //âî âòîðîé êîíñòàíòå õðàíèì èìÿ þçåðà
define('DB_PASS', '111');    //òóò õðàíèì ïàðîëü
define('DB_NAME', 'bogdan');  //òóò õðàíèì èìÿ áàçû äàííûõ
mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("íåò ïîäêëþ÷åíèÿ ê ñåðâåðó");
mysql_select_db(DB_NAME) or die("íåâîçìîæíî âûáðàòü ÁÄ");
mysql_query("SET NAMES utf8") or die("íå óñòàíîâëåíà êîäèðîâêà");
?>