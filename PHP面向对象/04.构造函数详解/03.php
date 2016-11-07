<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
析构函数: __destruct()

构造函数是在对象产生的时候,自动执行
析构函数是在对象销毁的时候,自动执行

构造函数就是出生时啼哭
析构函数就是临终遗言

对象如何销毁?
1:显式的销毁, unset ,赋值为NULL,都可以
2:PHP是脚本语言,在代码执行到最后一行时,
所有申请的内存都要释放掉.
自然,对象的那段内存也要释放,对象就被销毁了.


对于PHP所做的WEB程序,想犯内存泄露的错误也很难.

***/


class Human {

    public $name = null;
    public $gender = null;
    
    public function __construct() {
        echo '出生了<br />';
    }

    public function __destruct() {
        echo '终究没能逆袭!<br />';
    }

}



$a = new Human();
$b = new Human();
$c = new Human();
$d = new Human();


unset($a);

$b = true;
$c = NULL;

// 死3次

echo '<hr />';

/*
63行也执行完毕,页面执行完毕, $d 得回收,
*/

/***
最后一次销毁,是PHP的页面执行完毕了,63行也执行完毕了.
然后系统回收, $d此时才销毁,
因此 显示hr 即灰线后面
***/







