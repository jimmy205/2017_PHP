<?php

$poker = array();

for($i=0;$i<52;$i++) {

    // check repeat
   do{
       $temp = rand(0,51);
       //echo $poker[$i] . '<br>';

       $isRepeat = false;

       for ($j = 0; $j < $i; $j++) {
           if ($poker[$j] == $temp) {
               $isRepeat = true;
               break;
           }
       }
   }while($isRepeat);

       $poker[]=$temp;
       echo  $poker[$i] . '<br>';


}