<?php
@ $db = new mysqli('127.0.0.1','root','root','iii');

if(isset($_GET['delid'])){
    $delid = $_GET['delid'];
    $sql = "delete from member where id={$delid}";
    $db ->query($sql);
}


$sql = "select * from member";
$res = $db->query($sql);
?>

<a href="170531_addmember.php" > New </a> <br>
<a href="login.php">login</a>
<hr>
<table width="50%" border="1">
    <tr>
        <td>ID</td>
        <td>Password</td>
        <td>Account</td>
        <td>RealName</td>
        <td>Delete</td>
        <td>Edit</td>
    </tr>

    <?php
        while ($row = $res->fetch_object()){
            echo "<tr>";
            echo "<td>{$row->id}</td>";
            echo "<td>{$row->account}</td>";
            echo "<td>{$row->password}</td>";
            echo "<td>{$row->realname}</td>";
            echo "<td><a href='?delid={$row->id}' /> delete</td>";
            echo "<td><a href='editmember.php?editid={$row->id}' /> Edit</td>";
            echo "</tr>";
        }
    ?>
</table>