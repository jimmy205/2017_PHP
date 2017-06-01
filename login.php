<?php
include 'sql.php';
session_start();

$pdo = NEW PDO($dsn,$user,$password,$opt);

if(isset($_POST['account'])){
    $account = $_POST['account'];
    $password = $_POST['password'];

    $sql = "select * from member where account =?";

    $stmt = $pdo->prepare($sql);
    $stmt -> execute([$account]);

    if ($stmt->rowCount()>0){
        $memberobj = $stmt->fetchObject();

        if(password_verify($password,$memberobj->password)){
            header ("location:main.php");
            $_SESSION['member'] = $memberobj;
        }else {
            echo "XXX";
        }
    }else {
        echo "XX";
    }


}
?>

<form method="post">
    account : <input type="text" name="account">
    password : <input type="password" name="password">
    <input type="submit" value="login">
</form>
