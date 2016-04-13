<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
构造方法 __construct();  注意 前面是两个下滑线

构造方法的作用时机:
每当new一个对象,就会自动新new出来的对象发挥作用


new ClassName($args);

$args参数原样传给构造方法;
然后构造方法,用参数来影响新创建的对象

当然:new ClassName() 也可以不传参

但注意: $args要与构造方法里的参数一致.


***/

/*
class Human {
    public function __construct() {
        echo '紫微星下凡了!';
    }

    public $name = null;
    public $gender = null;
}

$a = new Human();
*/

// 构造函数的传参,并影响对象
/*
class Human {
    public function __construct() {
        $this->name = '李四';
        $this->gender = '女';
    }

    public $name = null;
    public $gender = null;
}

$a = new Human();
$b = new Human();
$c = new Human();

echo $a->name,'<br />'; // 李四
echo $b->name,'<br />'; // 李四
echo $c->name,'<br />'; // 李四
*/



class Human {
    public function __construct($name,$gender) {
        $this->name = $name;
        $this->gender = $gender;
    }

    public $name = null;
    public $gender = null;
}

$a = new Human('张飞','男');
$b = new Human('空姐','女');
$c = new Human('孙二娘','女');
$d = new Human();

echo $a->name,'<br />'; // 张飞
echo $b->name,'<br />'; // 空姐
echo $c->name,'<br />'; // 孙二娘




