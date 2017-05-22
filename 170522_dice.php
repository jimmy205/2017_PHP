<?php

$p = array(1=>0,0,0,0,0,0);

for ($i=0;$i<10000;$i++) {
    $temp=rand(1,9);
    $p[$temp>=7?$temp-3:$temp]++;

}

for($i=1;$i<=count($p);$i++){
    echo "point {$i} = {$p{$i}} <br>";
}



//switch ($p){
//    case $p[7] : $p[4]++;break;
//    case 8 : $p[4]++;break;
//    case 9 : $p[4]++;break;
//}

//    switch(){
//        case 1:$p1++;break;
//        case 1:$p1++;break;
//        case 1:$p1++;break;
//        case 1:$p1++;break;
//        case 5:$p5++;break;
//        case 6:$p6++;break;
//    }