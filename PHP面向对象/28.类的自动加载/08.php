<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

自动加载只能用__autoload函数吗?
答:不是的,其实也可以指定一个函数

比如 我们就用zidongjiazai()函数

注意:要通知系统,让系统知道--我自己写了一个自动加载方法,用这个!
怎么通知: 用系统函数 spl_auto_register

***/


// 下面这句话,是把zidongjiazai函数注册成为"自动加载函数";
spl_autoload_register('zidongjiazai');

function zidongjiazai($c) {
    echo '我引入了./' .  $c . '.php','<br />';
    require('./' .  $c . '.php');
}



$HumanModel = new HumanModel();

$HumanModel->t();


/**
__autoload 是一个函数

我能自己注册一个自动加载函数
能否注册类的一个静态方法 当 自动加载函数?


TP里这么做的,自己解决 :)
**/

