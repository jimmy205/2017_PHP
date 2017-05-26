<?php
include '0523api.php';
session_start();

if (!isset($_SESSION['cart'])) header("loaction:170526_cart.php");

$cartObj = $_SESSION['cart'];


$list = $cartObj->checklist();

foreach($list as $pid => $qty){
    echo "{$pid} : {$qty}<br>";
}
?>
<hr>
<a href="170526_cart_logout.php">logout</a>