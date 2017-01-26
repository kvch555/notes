<?php

//PDO的连接方法
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'root';
$password = '110110';
$dbh = new PDO($dsn, $user, $password);
var_dump($dbh);
?>