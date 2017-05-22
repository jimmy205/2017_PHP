<?php
$a[0]=12;
$a[5]=7;
echo var_dump($a);
echo "array Length : " . count($a);

echo '<hr>';

$b[] =12;
$b[] =12.222;
$b[] =true;
$b[] ='apple';
var_dump($b);
echo "array Length : " . count($b);

echo '<hr>';

$brad ['age'] = 51;
$brad ['weight'] = 81;
$brad ['name'] = 'brad';
$brad ['gender'] = true;
var_dump($brad);
echo "array Length : " . count($brad);

echo '<hr>';

$c = array(1,2,3,'gender' =>true,'Name' => "Jimmy");
echo var_dump($c);
echo "array Length : " . count($c);