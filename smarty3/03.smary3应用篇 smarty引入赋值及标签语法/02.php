<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

昨天回顾:
模板引擎用来分离html代码与php代码

原理:分析html模板中的标签,生成相应的php文件
再引入该php

smarty流程:
1:引入smarty
2:实例化
3:配置[最基本的要配置模板目录,和编译目录]
***/



// 引入smarty
require('../Smarty3/libs/Smarty.class.php');

// 实例化
$smarty = new Smarty();

// print_r($smarty);

// 配置
$smarty->template_dir = './temp';
$smarty->compile_dir = './comp';




// 从数据库取出会员信息,往往是数组形式
$user = array('name'=>'刘备','age'=>'28','weapon'=>'双剑');


$smarty->assign('name',$user['name']);
$smarty->assign('age',$user['age']);
$smarty->assign('weapon',$user['weapon']);

$zf = array('name'=>'张飞','age'=>'25','weapon'=>'丈八蛇矛');
$smarty->assign('zf',$zf);


$gy = array(0=>'关羽',1=>'25','weapon'=>'青龙偃月刀');
$smarty->assign('gy',$gy);

$smarty->display('liubei.html');



/*
总结: smarty可以赋字符串,数字等值,
也可以赋给标签一个"数组"

在模板里解析数组时,
用{$标签.key}, 或者 {$标签[index]}

当键为字符串时,即关联数组,只能用$标签.key
当键为数字时,即索引数组时,用$标签[index],或$标签.key

不想记的话,就都使 $标签.key就可以了
*/
