<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
smarty的标签与css标签防止冲突
***/



// 引入smarty
require('../Smarty3/libs/Smarty.class.php');

// 实例化
$smarty = new Smarty();

// print_r($smarty);

// 配置
$smarty->template_dir = './temp';
$smarty->compile_dir = './comp';

// 配置smarty的左右定界符
//$smarty->left_delimiter = '{>';
//$smarty->right_delimiter = '<}';





$gy = array(0=>'关羽',1=>'25','weapon'=>'青龙偃月刀');
$smarty->assign('gy',$gy);


$smarty->display('gy.html');


