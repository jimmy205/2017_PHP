<html>
<table>
    <input type="text" id="comment"> <br>
    <input type="button" value="send">
</table>
</html>
11

<?php
include 'sql.php';
$pdo = NEW PDO($dsn,$user,$password,$opt);

if(isset($_GET['Gymid'])){
    $GymId = $_GET['Gymid'];

    $sql = "update gyminfo set comment = 'good111' where GymId={$GymId}";
}
echo $GymId;
echo $sql;
?>

