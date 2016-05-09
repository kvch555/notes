<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/



session_start();

/**
unset($_SESSION['user']);
$_SESSION['school'] = '牛筋大学';
**/



// 销毁session,

/*
// 1:可以单独销毁某一个单元,即把$_SESSION数组某一个单元unset掉
unset($_SESSION['user']);
*/


/*
// 2:可以整体把箱子给清空,即$_SESSION数组给清空

$_SESSION = array();
*/

/*
// 3:利用函数把箱子整体清空,效果同第2种办法

session_unset();
*/


/*
// 4:彻底把箱子给毁掉,即文件都没了
*/


session_destroy();
