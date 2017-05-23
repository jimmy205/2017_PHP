<?php

function fx($n){
    $ret = $n*2+1;
    return $ret;
}

function sayYa($who,$pre ='hello'){
    echo "$pre,$who<br>";
}

function hello(){
    $names=func_get_args();
    foreach ($names as $name){
        echo "hello,{$name} <br>";
    }
}

function checkId(){


        $twid=$_GET['twid'];
        $reg='/^[A-Z][1-2][0-9]{8}$/';
        $r = preg_match($reg,$twid);
        if($r >0){

            $ret =0; //格式錯誤
            $n12s=substr($twid,0,1);
            $A_Z=("ABCDEFGHJKLMNPQRSTUVXYWZIO");
            $n12 = strpos($A_Z,$n12s) + 10;
            $n1 = (int)($n12/10);
            $n2 = $n12%10;
            $n3=substr($twid,1,1);
            $n4=substr($twid,2,1);
            $n5=substr($twid,3,1);
            $n6=substr($twid,4,1);
            $n7=substr($twid,5,1);
            $n8=substr($twid,6,1);
            $n9=substr($twid,7,1);
            $n10=substr($twid,8,1);
            $n11=substr($twid,9,1);

            $sum=($n1*1)+($n2*9)+($n3*8)+($n4*7)+($n5*6)+($n6*5)+($n7*4)+($n8*3)+($n9*2)+($n10*1)+($n11*1);
            if($sum %10 == 0){
                $ret = 0;
            }else{
                $ret = -1;
            }

            return $ret;
       }
}


function drawLottery(){
    $ball = range(1,49);
    shuffle($ball);
    for($i=0;$i<6;$i++){
        $ret[] = $ball[$i];
    }
    sort($ret);
    return $ret;
}
