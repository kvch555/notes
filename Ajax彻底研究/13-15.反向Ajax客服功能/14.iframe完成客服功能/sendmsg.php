<?php
/****
自学it网 高端PHP培训

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
****/

require('./conn.php');



$rec = $_POST['rec'];
$content = $_POST['content'];
$pos = $_COOKIE['username'];


$sql = "insert into msg (rec,pos,content) values ('$rec','$pos','$content')";

echo mysql_query($sql,$conn)?'ok':'fail';






