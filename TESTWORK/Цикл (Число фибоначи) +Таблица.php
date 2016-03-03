<?php
$result=array();
for ($i = 1; $i < 20; $i++)
    if ($i < 3) {
        $result[$i]=1;
    } else $result[$i]=$result[$i-2]+$result[$i-1];
echo "<pre>";
print_r ($result);
echo "</pre>";
foreach ($result as $f=>$a) {
    $tr = 2;
    $rt = 2;
    $b = count($result);
    echo '<table border="1">';
    for ($d = 1; $d < $tr; $d++) {
        echo "<tr>";
        for ($i = 1; $i < $rt; $i++) {
            echo "<td style='background-color:lightgreen'>" . $a . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>