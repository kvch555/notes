<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

用户注册之后,我们需要做用户登陆,退出

需要的知识点:cookie & session
***/



/*
看一个问题: 我是谁?
比如说 我们需要看自己的注册资料,即用户表的自己的信息,

连上mysql,查询数据,地址栏传参,传user_id,
根据user_id,查询用户信息.
*/


$user_id = $_GET['user_id'] + 0;


$conn = mysql_connect('localhost','root','111111');

$sql = 'use boolshop';
mysql_query($sql,$conn);

$sql = 'set names utf8';
mysql_query($sql,$conn);


$sql = 'select * from user where user_id=' .  $user_id;
$rs = mysql_query($sql,$conn);


print_r(mysql_fetch_assoc($rs));



/**
思考:如果我的user_id是5,我在地址栏输入5,看到自己的信息.
但是如果把user_id改成6,岂不是看到了别人的信息?

如何才能控制 只看到自己的信息?
**/





