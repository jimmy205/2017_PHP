<?php

for($i=0;$i<10;$i++) $check[]=fales;

for($i=0;$i<10;$i++){

    do{
        $isRepeat=false;
        $temp=rand(0,9);
        if(!$check[$temp]){
            $poker[]=$temp;
            $check[$temp]=true;
        }else{
            $isRepeat=true;
        }
    }while($isRepeat);
    echo $poker[$i] . '<br>';
}
