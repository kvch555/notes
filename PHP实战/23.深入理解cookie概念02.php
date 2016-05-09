<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
这个页面非常重要,不是网站的用户,不能看
***/



// 奇Yu同学的方法,先判断用户名/密码,然后定义常量,
// 下面的代码检查常量

$conn = mysql_connect('localhost','root','111111');

$sql = 'use boolshop';
mysql_query($sql,$conn);

$sql = 'set names utf8';
mysql_query($sql,$conn);


$u = $_POST['username'];
$p = $_POST['passwd'];

$sql = "select count(*) from user where username='" .  $u . "' and passwd='" . md5($p) . "'";
$rs = mysql_query($sql,$conn);

$row = mysql_fetch_row($rs);


if($row[0] == 1) {
    // 登陆成功
    define('USER',true);
} else {
    echo '用户名密码错误';
    exit;
}



if(!defined('USER')) {
    echo '你没有登陆';
    exit;
}



// 如果把这行代码控制住,非本站用户不能看
echo '这部分非常重要! 当你看到时,说明你是本站用户';
echo 'very important!';

?>

<a href="03.php">个人隐私页面</a>