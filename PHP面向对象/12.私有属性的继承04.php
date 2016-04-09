<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
继承时,继承来Protcted/public 属性/方法
完全继承过来,属性子类.

继承来 父类private属性/方法,
但不能操作

***/


/****
代码部分
****/

class Human {
    // private $wife = '小甜甜';

    public $age = 22;
    public function cry() {
        echo '5555<br />';
    }

    public function pshow() {
        echo $this->wife,'<br />';
    }
}


class Stu extends Human{
    private $wife = '凤姐';
    
    public $height = 180;
    public function sshow() {
        parent::pshow();
        echo $this->wife,'<br />';
    }
}

$lisi =  new Stu();

// print_r($lisi);
$lisi->sshow(); // ???



/*
根据图来思考:
如果把Stu类中的 wife=凤姐去掉,什么效果?  // 未定义属性
如果把Human类中的 wife=小甜甜去掉,什么效果? // 无权访问


*/


