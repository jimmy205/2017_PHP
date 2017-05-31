<?php
session_start();
if(!isset($_SESSION['id'])) header("location:170531_member.php");

$updateid=$_SESSION['id'];

$account = $_GET['account'];
$password = $_GET['password'];
$realname = $_GET['realname'];

$sql = "update member set account = '{$account}',password = '{$password}',realname='{$realname}' where id='{$updateid}'";

$db = new mysqli('127.0.0.1','root','root','iii');

$db->query($sql);
header("Location: 170531_member.php");