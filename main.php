<?php
include 'sql2.php';
session_start();

if(!isset($_SESSION['member'])) header("location:login.php");
$memberObj = $_SESSION['member'];

@$selectopt = $_GET['selectoption'];

echo $selectopt;

if($selectopt=2){
    $area = "and 1=1";
}else if ($selectopt=1){
    $area = "and mlevel like '%國家%'";
}

echo $area;

$pdo = NEW PDO($dsn,$user,$password,$opt);
$sql = "select * from moutain where 1=1 {$area}";

$stmt = $pdo->prepare($sql);
$stmt->execute();


?>
<h1>hello!<?php echo $memberObj->realname; ?>!!</h1>
<hr>
<form method="get">
<select name="selectoption" onchange="javascript:submit()" onchange="location.reload()">
    <option value="0">全部</option>
    <option value="1">區域級</option>
    <option value="2">國家級</option>
    <option value="3">其他</option>
</select>
</form>
<hr>
<table border="1" width="50%">
    <tr>
        <th>number</th>
        <th>name</th>
        <th>level</th>
        <th>manager</th>
        <th>entrance</th>
    </tr>
        <?php while($row = $stmt->fetchObject()) {
            echo "<tr>";
            echo "<td>{$row->mnumber}</td>";
            echo "<td>{$row->mname}</td>";
            echo "<td>{$row->mlevel}</td>";
            echo "<td>{$row->manager}</td>";
            echo "<td>{$row->mentrance}</td>";
            echo "</tr>";
        };
        ?>
</table>
<hr>
<a href="170526_cart_logout.php" > logout </a>
