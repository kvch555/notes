<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
静态属性  静态方法

在属性,和方法前  加 static 修饰,这种称为静态属性/ 静态方法

***/


class Human {
    static public $head = 1;

    public function changeHead() {
        Human::$head = 9;
    }

    public function getHead() {
        return Human::$head;
    }
}


// 现在没有对象,想访问静态的$head属性


/*
普通属性包在对象内,用对象->属性名 来访问
静态属性放在类内的, 


静态属性既然存放于类空间内
1:类声明完毕,该属性就已存在,不需要依赖于对象而访问
2:类在内存中只有一个,因此静态属性也只有一个
*/

// 当一个对象都没有,静态属性也已随类声明而存在
echo Human::$head,'<br />'; // 1


// 静态属性只有一个,为所有的对象的共享.
$m1 = new Human();
$m1->changeHead(); // 某个人改变了人类的头的数量


$m2 = new Human();
$m3 = new Human();


echo $m2->getHead(),'<br />'; // 9
echo $m3->getHead(),'<br />'; // 9




