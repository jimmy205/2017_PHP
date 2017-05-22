<?php
$a = array(1,2,3);
$b[] = $a;
$b[] = array(0,2);
$b[] = $b;

echo count($b);