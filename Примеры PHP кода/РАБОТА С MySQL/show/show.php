<?php
require_once 'connect.php'
?>
<?php require_once 'libs.php'; ?>
<?php
require_once 'menu.php';
?>
<?php
$result = showALL(); //�������� ������� showALL ��������� $result ($result ���������� ��������)
?>
<table border="1" width="300">
    <tr>                          <!--<tr> ������ � ������� <td> 3 ������-->
        <td>�.�����</td>    <!-- ������� ������� � ���������� ������� ������ -->
        <td>���:</td>
        <td>�������:</td>
        <td>�������:</td>
    </tr>
    <?php                       // ��� ������ ����������� ������� $result � ������� ������ ���� foreach-->
    $i = 1;
    foreach($result as $item) { ?>   <!--(������� ��� PHP ��� ���� ����� ������� �� �������� ���� ��� ��������)   �� ������ �������� ����� �� ����������� ���������� $item -->
        <tr>
            <td><?php echo $i; ?></td>  <!--�������� ������� � ���������� ������� ��� ������ �������� ����� �������� ��  1-->
            <td><?php echo $item['name']; ?></td> <!-- $item['�������� ������� ������� SQL-->
            <td><?php echo $item['phone']; ?></td>
            <td><?php echo $item['age']; ?></td>
        </tr>
        <?php
        $i++;
    }
    ?>
    <tr>
        <td colspan="3">�����:</td>   <!-- ������� �������  -->
        <td><?php echo $i - 1; ?></td>     <!--������� �������� $i ����� ���� ( ������ ��� ������ ����� ������� �� ����)-->
    </tr>
</table>
</body>
</html>