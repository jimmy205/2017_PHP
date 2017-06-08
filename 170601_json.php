<?php
include 'sql3.php';
$pdo = NEW PDO($dsn,$user,$password,$opt);


$sql = "insert into gyminfo (GymId,GName,OperationTel,Address,GymFuncList,Photo1,LatLng) VALUES (?,?,?,?,?,?,?)";

//,GName,OpenrationTel,Address,GymFuncList,Photo1,LatLng
//,?,?,?,?,?,?

 $json = file_get_contents("https://iplay.sa.gov.tw/api/GymSearchAllList?\$format=application/json;odata.metadata=none");

 $root = json_decode($json);
 //var_dump($root);

 foreach ($root as $row){

     $GymId = $row->GymID;
     $GName = $row->Name;
     $OperationTel = $row->OperationTel;
     $Address = $row->Address;
     $GymFuncList = $row->GymFuncList;
     $Photo1 = $row->Photo1;
     $LatLng = $row->LatLng;

     $pdo->prepare($sql) ->execute([$GymId,$GName,$OperationTel,$Address,$GymFuncList,$Photo1,$LatLng]);
     //,$GName,$OpenrationTel,$Address,$GymFuncList,$Photo1,$LatLng
 }
