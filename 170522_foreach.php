<?php
$a = array(1,2,3,'brad'=>4,5);

foreach ($a as $Key =>$value){
    echo $Key . ':' . $value . '<br>';
}

echo '<hr>';

for ($i=0;$i<count($a);$i++){
    echo $i .':' . $a[$i] . '<br>';
}