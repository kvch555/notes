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
smarty的引用流程
smarty的定界符与css的{}冲突的解决
smarty的数组的赋值与引用
assign的深入探讨


我们继续来探讨:
1: smarty能赋数组,能否赋对象呢?
2: 在昨天的学习中,我们总是要反复配置smarty模板的template_dir等选项
能否简化?
3: 模板里用标签引用一个变量,还能否进行运行和修改?
4: PHP中能分支,循环输出,模板中能不能?
***/


require('../Smarty3/libs/Smarty.class.php');

// 实例化
$smarty = new Smarty();

// 配置
$smarty->template_dir = './temp';
$smarty->compile_dir = './comp';


class human {
    public $name = '张三';
    public $age = '28';

    public function say() {
        return '你好 世界';
    }
}


$man = new human();

$smarty->assign('man',$man);

$smarty->display('01.html');