<?php
include 'sql.php';

$pdo = NEW PDO($dsn,$user,$password,$opt);

$sql = "select * from GymInfo limit 50";

$stmt = $pdo ->query($sql);



?>

<html>
<select>
    <option>taipei</option>
    <option>taichung</option>
    <option>kaosiung</option>
</select>
<form>
<input type="" width="200" height="100">
<input type="submit" value="send">
</form>
<hr>
<table width="50%" border="1">
    <tr>

        <td>Name</td>
        <td>Address</td>
        <td>OperationTel</td>
        <td>GymFuncList</td>
        <td>Photo</td>
        <td>Detail</td>
        <td>Comment</td>
    </tr>

    <?php
    while ($row = $stmt->fetchObject()){
        echo "<tr>";
        echo "<td>{$row->GName}</td>";

        echo "<td>{$row->Address}</td>";
        echo "<td>{$row->OperationTel}</td>";
        echo "<td>{$row->GymFuncList}</td>";
        echo "<td><a href='{$row->Photo1}'><img src='{$row->Photo1}' width='200' height='100' </a> </td>";
        echo "<td><a href='https://iplay.sa.gov.tw/gyminfo/index/{$row->GymId}'>detail</a> </td>";
        echo "<td><a href='comment.php?Gymid={$row->GymId}'>comment</td>";
       // echo "<td><a href='editmember.php?editid={$row->id}' /> Edit</td>";
        echo "</tr>";
    }
    ?>
</table>

</html>
