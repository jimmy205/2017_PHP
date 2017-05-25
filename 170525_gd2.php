<?php
$im = imagecreatefromjpeg("./upload/banner.jpg");

$blue = imagecolorallocate($im,190,150,145);
imagettftext($im,60,3,0,100,$blue,"./fonts/fireflysung.ttf","hello world");

header('Content-Type: image/jpeg');

imagejpeg($im);

imagedestroy($im);