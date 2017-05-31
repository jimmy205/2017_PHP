<?php
//$link = mysqli_('127.0.0.1','root','root','iii') or die("server busy");
//
//if($link) echo "OK";
//


@$db = new mysqli('127.0.0.1','root','root','iii');

//$sql = ('insert into member (account,password,realname) value ("brad","1234","brad")');
$sql = 'select * from member';
$result = $db->query($sql);


while ($res = $result->fetch_object()){
    echo "{$res->id} : {$res->account} : {$res->password} : {$res->realname} <br>";
}
