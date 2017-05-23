<?php
include '0523api.php';

$r=fx(3);

echo $r;

echo"<hr>";

sayYa("brad",'hi');
sayYa('Jimmy');
echo "<hr>";

$name=array('jimmy','ted','brad');

for($i=0;$i<$name.length;$i++){
    sayYa($name[$i]);
}

echo '<br>';

hello("A1","A2","A3");
