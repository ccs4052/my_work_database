<?php
define('DB_HOST', 'localhost');   //����������� �������� � ��������� ��� ������� (��� ������� ������ � ���� ���������)
define('DB_USER', 'user');     //�� ������ ��������� ������ ��� �����
define('DB_PASS', '111');    //��� ������ ������
define('DB_NAME', 'bogdan');  //��� ������ ��� ���� ������
mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("��� ����������� � �������");
mysql_select_db(DB_NAME) or die("���������� ������� ��");
mysql_query("SET NAMES utf8") or die("�� ����������� ���������");
?>