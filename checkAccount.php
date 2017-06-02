<?php
    include 'sqljimmy.php';
    $pdo = new pdo($dsn,$user,$password,$opt);

    if(!isset($_GET['account'])) header("location:loginUi.php");

        $account = $_GET['account'];
        $passwd = $_GET['password'];

        $sql = "select * from member where account=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$account]);

        if($stmt->rowCount()>0){
            $memberobj = $stmt->fetchObject();
            $mpassword = $memberobj->password;
            if(password_verify($passwd,$mpassword)){

                $_SESSION = $memberobj;
                header("location:main2.php");
            }else{
                header("location:loginUi.php");
            }
        }else{
            header("location:loginUi.php");
        }
