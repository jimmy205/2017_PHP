<?php
 $pf=fopen('./upload/test2.txt','r');

 while($line = fgets($pf)){
     $len = strlen($line);
     echo $len.":".$line . '<br>';
 }

 fclose($pf);