<?php
if(!isset($_GET['rate'])) exit(0);

$rate = $_GET['rate'];

$im = imagecreate(400,40);

$yellow = imagecolorallocate($im,255,255,0);
$red = imagecolorallocate($im,255,0,0);
imagefilledrectangle($im,0,0,400,40,$yellow);
imagefilledrectangle($im,0,0,(int)($rate*400/100),40,$red);


header('Content-Type: image/jpeg');

imagejpeg($im);

imagedestroy($im)

?>