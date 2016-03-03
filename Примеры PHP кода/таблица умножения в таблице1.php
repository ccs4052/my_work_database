<body>
    <h1>Таблица умножения</h1>
<?php
$rows=10;
$cols=10;
echo "<table border='1' align='center'>";
for($tr=1;$tr<=$rows;$tr++){
    echo "<tr>";
    for($td=1;$td<=$cols;$td++){
        if($tr==1 or $td==1)
            echo "<th style='background:yellow'>".$tr*$td."</th>";
        else
            echo "<td>".$tr*$td."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
