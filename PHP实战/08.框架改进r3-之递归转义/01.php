<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
Warning: Call-time pass-by-reference has been deprecated
Fatal error: Call-time pass-by-reference has been removed

在tieba项目中,有同学报出这么两种错误.
***/


/*
$age = 10;
function grow($age) {
    $age += 1;
    return $age;
}


echo grow($age),'<br />';  // 11
echo $age,'<br />';         // 10

// 确实想改外部$age的值,可以这样
$age = grow($age);
*/

error_reporting(E_ALL|E_STRICT);

$age = 10;
function grow($age) {
    $age += 1;
    return $age;
}

echo grow(&$age),'<br />';  // 11
echo $age,'<br />';         // 11

/*
第2个函数,用的是引用传值,
函数内部的$age 和 全局$age 指向的是同一个变量地址.
因此,内部变化,影响了外部的变量


但是--仔细思考,这种写法,有一个非常不好的地方
违反了封装性.

函数运行之后,对外部的环境应该是"没有副作用的".


因此:对函数进行引用传参,是不推荐的!
在PHP5.0以上就不推荐了,
PHP5.4的时候,干脆删除了引用传参这个功能.


因此:allow_call_time_pass_reference = Off
这个选项如果off,即不推荐引用传参,会报warning

而在php5.4版本中,彻底不允许引用传参,
因此,报fatal error



解决办法: 
1: allow_call_time_pass_reference = On 重启apache
但不推荐这样来做,归根结底,引用传参数不够规范.

2: 不引用传参,自己写方法来递归的转义数组
*/







