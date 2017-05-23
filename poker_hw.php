<?php

$poker = array();
$n=5;
for ($i=0;$i<$n;$i++){

    $poker[]=$i;
    echo $poker[$i] . '<br>';
}
echo'<hr>';
for($i=0;$i<$n;$i++){
    $temp=rand($i,4);
    $card=$poker[$temp]; // 將poker[temp]的值放入變數$card中
    $poker[$temp]=$poker[$i]; // 將poker陣列的第i個值，放入poker的temp中
    $poker[$i]=$card; //將暫存在card的值放入第i個值
    echo $poker[$i] . '<br>';
}

//
//    (1,2,3,4,5) => poker array
//    if rand(i,4) = 3 =>
//    (1,2, ,4,5) => 將3取出，放入card中
//    ( ,2,1,4,5) => 將poker中第 1 (i) 個值取出，放入第 3 (temp) 中
//    (3,2,1,4,5) => 將暫存在card中的值放入poker的第1(i)個值中