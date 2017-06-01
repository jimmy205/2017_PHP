<?php
include 'sql2.php';
$pdo = NEW PDO($dsn,$user,$password,$opt);


$sql = "insert into moutain (mnumber,mname,mlevel,manager,mentrance) VALUES (?,?,?,?,?)";

 $json = file_get_contents("http://data.coa.gov.tw/Service/OpenData/DataFileService.aspx?UnitId=102");

 $root = json_decode($json);

 foreach ($root as $row){

     $mnumber = $row->number;
     $mname = $row->name;
     $mlevel = $row->level;
     $manager = $row->manager;
     $mentrance = $row->entrance;

     $pdo->prepare($sql) ->execute([$mnumber,$mname,$mlevel,$manager,$mentrance]);
 }
