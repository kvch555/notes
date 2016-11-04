<?php
/*昨天回顾:
模板引擎用来分离html代码与php代码

原理:分析html模板中的标签,生成相应的php文件
再引入该php

smarty流程:
1:引入smarty
2:实例化
3:配置[最基本的要配置模板目录,和编译目录]*/

// 引入smarty
require('../smarty3/libs/Smarty.class.php');

// 实例化
$smarty=new Smarty();

//print_r($smarty);exit;

// 配置
$smarty->template_dir='./temp';
$smarty->compile_dir='./comp';

$title = '两会召开中';
$content = '提案特别多,听说房子要涨价';

//赋值
$smarty->assign('xxx',$title);
$smarty->assign('content',$content);

$smarty->display('news.html');

/*
这个页面虽然简单,但是是smarty的典型使用流程

*/

?>