<?php
//查询所有行数据方法
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'root';
$password = '110110';
$dbh = new PDO($dsn, $user, $password);

$sql="select * from haha";
$row=$dbh->query($sql);

$rs=$row->fetchAll(PDO::FETCH_ASSOC);
var_dump($rs);exit;

?>