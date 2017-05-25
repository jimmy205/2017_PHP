<?php
$imgSrc = imagecreatefromjpeg("./upload/banner.jpg");
$imgDst = imagecreate(200, 200);
$imgSW = imagesx($imgSrc);
$imgSH = imagesy($imgSrc);
if ($imgSW>$imgSH){
    $imgDW = 200;
    $imgDH = $imgSH * 200 / $imgSW;
    $imgDH2 = (int)(($imgDH /2));
}else{
    $imgDH = 200;
    $imgDW = $imgSW * 200 / $imgSH;
    $imgDWy = $imgDH/2;
}
imagecopyresized (
    $imgDst , $imgSrc,
    0 , $imgDH2,
    0, 0,
    $imgDW , $imgDH ,
    $imgSW , $imgSH );
// 3
header('Content-Type: image/jpeg');
imagejpeg($imgDst);
// 4
imagedestroy ( $imgSrc );
imagedestroy ( $imgDst );
