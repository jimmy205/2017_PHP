<?php
if(isset($_GET['account'])){
    $account = $_GET['account'];
    $password = password_hash($_GET['password'],PASSWORD_DEFAULT);
   // $password = $_GET['password'];
     $realname = $_GET['realname'];

    $sql = "insert into member (account,password,realname) values ('{$account}','{$password}','{$realname}')";
   @ $db = new mysqli('127.0.0.1','root','root','iii');
    $res = $db->query($sql);
    header("location:170531_member.php");
}



?>




<form>
    <table>
        <tr><th>Account:</th><td><input type="text" name="account" /></td></tr>
        <tr><th>password:</th><td><input type="password" name="password" /></td></tr>
        <tr><th>Real Name:</th><td><input type="text" name="realname" /></td></tr>
        <tr><td><input type="submit" value="New" /></td></tr>

    </table>
</form>