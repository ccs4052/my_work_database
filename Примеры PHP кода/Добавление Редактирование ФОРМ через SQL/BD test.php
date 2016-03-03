<?php
session_start();
define ('DB','localhost');
define ('DBLOGIN','user');
define ('DBPASS','111');
define ('DBNAME','bogdan');
$connect = mysqli_connect(DB,DBLOGIN,DBPASS,DBNAME) or die(mysqli_error());

if(isset($_SESSION['info'])){  //условие на добавлени надписи о том что запись добавлена

    $info = $_SESSION['info'];
    unset ($_SESSION['info']);
}
if(isset($info)){?>
    <h1><?php echo $info; ?></h1>
<?php } ?>

<?php if(isset($_SESSION['del'])){   //условие на выведение надписи удалением по ссылке
    $del = $_SESSION['del'];
    unset ($_SESSION['del']);
}
if (isset($del)) {?>
    <h1><?php echo $del; ?></h1>
<?php } ?>

<?php if(isset($_SESSION['delb'])){   //условие на выведение надписи удаления Чекбоксом
    $delb = $_SESSION['delb'];
    unset ($_SESSION['delb']);
}
if (isset($delb)) {?>
    <h1><?php echo $delb; ?></h1>
<?php } ?>

<a href="addnews.php">ДОБАВИТЬ НОВУЮ НОВОСТЬ</a><br>
Все существующие новости:
<form action="add.php" method="post">
<?php
$news = mysqli_query($connect,"SELECT * FROM news ORDER BY 'id' DESC");
while($row = mysqli_fetch_assoc($news)) { ?>
    <div>
            <div><input type="checkbox" name="ids[]" value="<?php echo $row['id']; ?>"><a href="Edit.php?id=<?php echo $row['id']; ?>">Редактировать</a> <a href="add.php?action=delete&id=<?php echo $row['id']; ?>">УДАЛИТЬ</a> <?php echo $row['cat']; ?> <span style="color:#555555; font-size:10px"><?php echo $row['date']; ?> </span></div>
    </div>
<?php } ?>
    <input type="submit" name="delete" value="Удалить отмеченные запись">
</form>

