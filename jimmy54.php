<?php

 include 'sqljimmy.php';
 $pdo = new pdo($dsn,$user,$password,$opt);
 $sql="select * from member";

$stmt = $pdo->prepare($sql);
$stmt ->execute();

echo "<table>";
while ($obj = $stmt->fetchObject()){
    echo "<tr>";
    echo"<td>{$obj->account}</td>";
    echo "</tr>";
}
echo "</table>";