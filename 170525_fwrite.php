<?php
$pf = fopen('./upload/text4.txt','w');
    fwrite($pf,"hello world");
fclose($pf);