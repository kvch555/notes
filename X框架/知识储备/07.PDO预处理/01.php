<?php
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'root';
$password = '110110';
$dbh = new PDO($dsn, $user, $password);

//PDO预处理插入
$sql="insert into haha (username) values (?)";

$st=$dbh->prepare($sql);
$st->execute(['mayun']);

var_dump($dbh->lastInsertId());
?>