<?php
include 'sqljimmy.php';
$pdo = new pdo($dsn,$user,$password,$opt);

      if(!isset($_GET['account'])) header("Location:addMember.php");

      $account= $_GET['account'];
      $passwd=password_hash($_GET['password'],PASSWORD_DEFAULT);

     // $passwd = $_GET['password'];
      $realname= $_GET['realname'];

      $sql = "insert into member (account,password,realname) VALUES (?,?,?)";



      $stmt = $pdo->prepare($sql);
      $stmt ->execute([$account,$passwd,$realname]);

        header("location:loginUi.php");
