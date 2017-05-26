<?php
include '0523api.php';

if(TWID::chkid($twid='A123456789')==0){
$chkid=new TWID($twid='A123456789');

echo $chkid->getgender()?'male':'female';
}else{
    echo "XX";
}