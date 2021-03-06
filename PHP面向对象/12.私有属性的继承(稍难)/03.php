<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

继承了哪些东西?

子类可以做什么扩充?
构造函数如何继承的?
私有属性/方法如何继承?

***/


/****
代码部分
****/


// 

class Human {
    private $wife = '小甜甜';

    public function cry() {
        echo '5555<br />';
    }
}


class Stu extends Human{
    public function subtell() {
        echo $this->wife;
    }
}

$lisi =  new Stu();

$lisi->cry(); // 5555
$lisi->subtell(); // 出错如下
/*
未定义的属性,wife属性
Undefined property: Stu::$wife in D:\www\1108\03.php on line 44

问:父类不是有wife属性吗? 为什么没继承过来?
答: 私有的属性,可以理解不能继承.
    (其实能继承过来,只不过无法访问)

public protected private中,
public protected 都可以继承,并拥有访问和修改的权限
这就好比说,家产已经继承了,愿意卖就卖,愿意改就改.

而私有的,就像先祖的牌位,继承下来
但是无权动,只能供着.

*/


