<?php
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'root';
$password = '110110';
$dbh = new PDO($dsn, $user, $password);

//PDO预处理修改
$sql="update haha set username=? where id=?";
$st=$dbh->prepare($sql);
$st->execute(['mayun',4]);

var_dump($st->rowCount());

?>