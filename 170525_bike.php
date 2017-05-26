<?php
include '0523api.php';

$mybike = new bike;
$urbike = new bike;

$mybike->upspeed();$mybike->upspeed();$mybike->upspeed();$mybike->upspeed();$mybike->upspeed();

$urbike->upspeed();$urbike->downspeed();$urbike->upspeed();$urbike->upspeed();

echo $mybike->getspeed() . '<br>';
echo $urbike->getspeed() ;

echo '<hr>';

$myscooter = new scooter();
$myscooter->upspeed();
echo "my scooter speed : {$myscooter->getspeed()}";