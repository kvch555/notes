<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
__autoload用法
***/


function __autoload($c) {
    echo '我先自动加载';
    echo './' . $c . '.php';
    echo '<br />';
    require('./' . $c . '.php');
}


$lisi = new HumanModel();

$lisi->t();




