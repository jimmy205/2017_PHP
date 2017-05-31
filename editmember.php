<?php
session_start();
if(!isset($_GET['editid'])) header("location:170531_member.php");
    $editid = $_GET['editid'];
    $sql = "select * from member where id={$editid}";
    $_SESSION['id'] = $editid;
    @ $db = new mysqli('127.0.0.1', 'root', 'root', 'iii');
    $res = $db->query($sql);
    $row = $res ->fetch_object();

?>




<form action="updatemember.php">
    <table>
        <tr>
            <th>Account:</th>
            <td><input type="text" name="account" value="<?php echo $row->account; ?>">
            </td>
        </tr>
        <tr><th>password:</th><td><input type="password" name="password" value="<?php echo $row->password; ?>"></td></tr>
        <tr><th>Real Name:</th><td><input type="text" name="realname" value="<?php echo $row->realname; ?>"></td></tr>
        <tr><td><input type="submit" value="update" /></td></tr>
    </table>
</form>