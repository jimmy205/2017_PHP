<?php
include '0523api.php';
session_start();

$memberObj = new member($twid='A123456789');
$cartObj = new cart($memberObj);

$_SESSION['cart'] = $cartObj ;


$cartObj->addItem("o01",2);
$cartObj->addItem("p02",3);


$list = $cartObj->checklist();

foreach ($list as $pid => $qty){
    echo "{$pid}:{$qty}";
}

?>

<hr>
<a href="170526_cart1.php" >next </a>
