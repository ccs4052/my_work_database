<?php
require_once 'connect.php'
?>
<?php require_once 'libs.php'; ?>
<?php
require_once 'menu.php';
?>
<?php
$result = showALL(); //присвоим функции showALL переменую $result ($result получиться массивом)
?>
<table border="1" width="300">
    <tr>                          <!--<tr> строка в которой <td> 3 ячейки-->
        <td>п.номер</td>    <!-- добавим столбик с порядковым номером строки -->
        <td>Имя:</td>
        <td>Телефон:</td>
        <td>Фозраст:</td>
    </tr>
    <?php                       // Для вывода конструкции массива $result в таблицу делаем цикл foreach-->
    $i = 1;
    foreach($result as $item) { ?>   <!--(закрыли тэг PHP для того чтобы таблицу не выводить ЭХОМ для удобства)   на каждую итерацию цикла мы присваиваем переменную $item -->
        <tr>
            <td><?php echo $i; ?></td>  <!--добавили столбец с порядковым номером при каждой итерации будет увеличен на  1-->
            <td><?php echo $item['name']; ?></td> <!-- $item['название столбца таблици SQL-->
            <td><?php echo $item['phone']; ?></td>
            <td><?php echo $item['age']; ?></td>
        </tr>
        <?php
        $i++;
    }
    ?>
    <tr>
        <td colspan="3">всего:</td>   <!-- считает столбци  -->
        <td><?php echo $i - 1; ?></td>     <!--выводим значение $i минус один ( потому как строку ВСЕГО считать не надо)-->
    </tr>
</table>
</body>
</html>