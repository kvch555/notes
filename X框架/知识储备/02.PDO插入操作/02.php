<?php
//PDO插入数据方法

$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'root';
$password = '110110';
$dbh = new PDO($dsn, $user, $password);

$sql="insert into haha (username) values ('haha1')";
$rs=$dbh->exec($sql);
var_dump($rs);
?>