<?php
include '0523api.php';

$myball = drawLottery();
foreach($myball as $lottery){
    echo "{$lottery}<br>";
}

// echo "ok";