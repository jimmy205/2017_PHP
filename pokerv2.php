<?php

for($i=0;$i<10;$i++) $check[]=false ;

// echo $check[9];


for($i=0;$i<10;$i++){

    do{
        $temp=rand(0,9);
        $isRepeat=false;
        if(!$check[$temp]){
            $poker[]=$temp;
            $check[$temp]=true;
           // echo $temp;
           // break;
        }else{
           $isRepeat=true;
        }
    }while($isRepeat);
    echo $poker[$i] . '<br>' ;
}
