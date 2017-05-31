<?php
include 'sql.php';

$pdo = NEW PDO($dsn,$user,$password,$opt);

$account='boo';
$password ='123';
$realname='jim';

$sql = "insert into member (account,password,realname) VALUES (?,?,?)";

$res = $pdo->query($sql);
$stat = $pdo->prepare($sql) ->execute([$account,$password,$realname]);

