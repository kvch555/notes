
<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

session详细语法学习

session的创建,修改,销毁


1:无论是创建,修改,还是销毁session,都需要先session_start();
2:一旦session_start之后,$_SESSION就可以自由的添加,删除,修改
即:当成普通数组一样操作(这一点和cookie,cookie的操作,只能通过setcookie函数来进行)
***/


session_start();
$_SESSION['user']='zhaobenshan';
$_SESSION['school']='PKU';

$_SESSION['test'] = array('中','华','人');



class Dog {
    public $leg = 4;
}

$dog = new Dog();
$_SESSION['dog'] = $dog;


echo 'OK';


