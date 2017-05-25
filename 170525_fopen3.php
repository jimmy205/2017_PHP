<?php
 if(!isset($_GET['filename'])) (header("loaction:170525_fopen2"));

 $filename = $_GET['filename'];
 $cont = $_GET['cont'];

 $fp = fopen($filename,"w+");

 fwrite($fp,$cont);

 fclose($fp);

header("location:{$filename}");
