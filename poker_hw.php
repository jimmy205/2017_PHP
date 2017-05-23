<?php

$poker = array();
$n=52;
for ($i=0;$i<$n;$i++){

    $poker[]=$i;
    echo $poker[$i] . '<br>';
}

for($i=$n;$i<$n;$i--){
    $temp=rand(0,51);
    $poker[$i]=$temp;
}