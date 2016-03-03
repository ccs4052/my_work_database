<?php


function calc($num1,$num2,$action){
    if ($action === 'плюс') {
        $sum = $num1 + $num2;
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>" . $sum . "</td>";
        echo "</tr>";
        echo "</table>";
    }
    elseif ($action === 'минус') {
        $min = $num1 - $num2;
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>" . $min . "</td>";
        echo "</tr>";
        echo "</table>";
    }
    elseif ($action === 'умножить'){
        $too = $num1*$num2;
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>" . $too . "</td>";
        echo "</tr>";
        echo "</table>";
    }
    elseif ($action === 'разделить'){
        $mix = $num1/$num2;
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>" . $mix . "</td>";
        echo "</tr>";
        echo "</table>";
    }else {
        echo 'неправильно задано \'Действие\'';
    }

}
if(isset($_POST['num11'],$_POST['num12'],$_POST['action1'])){
    calc($_POST['num11'],$_POST['num12'],$_POST['action1']);
}

?>


<h3>Форма</h3>
<form method="post">
Значение 1:    <div><input type="text" name="num11"></div>
Значение 2:    <div><input type="text" name="num12"></div>
Действие  : (плюс,минус,умножить,разделить)   <div><input type="text" name="action1"></div>
    <div><input style="border-bottom-color: aqua","; type="submit" name="submit" value="Отправить"></div>
</form>