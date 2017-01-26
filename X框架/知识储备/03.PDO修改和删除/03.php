<?php
//PDO修改数据方法
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'root';
$password = '110110';
$dbh = new PDO($dsn, $user, $password);

$sql="update haha set username='wang' where id=1";
$rs=$dbh->exec($sql);
var_dump($rs);

//PDO删除数据方法
$sql="delete from haha where id=7";
$rs=$dbh->exec($sql);
var_dump($rs);

?>