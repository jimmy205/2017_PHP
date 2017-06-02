<?php
 if(!isset($_GET['a'])) {
     echo "F1";
     die();
 }

 include 'sqljimmy.php';
 $pdo = new pdo($dsn,$user,$password,$opt);

 $account = $_GET['a'];

 $sql="select account from member where account = ?";

$stmt = $pdo->prepare($sql);
$stmt ->execute([$account]);

if($stmt->rowCount()>0){
    echo "F2";
}else{
    echo "OK";
}