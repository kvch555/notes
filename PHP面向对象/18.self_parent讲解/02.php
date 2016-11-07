<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
总结self, parent的用法

self: 本类(不要理解成本对象)
parent: 父类

在引入自身的静态属性/静态方法
以及父类的方法时,可以用到.

用法:
self::$staticProperty
self::staticMothed;
parent::$staticProperty
parent::Mothed;
***/
/*
class Human {
    static public $head = 1;

    public function say() {
        echo Human::$head,'<br />';
    }
}


echo Human::$head,'<br />'; // 1

$lisi = new Human();
$lisi->say(); //
*/
// 某一天,类名要统一,规范化. Human不叫Human了,叫cHuman
// 导致类内部,凡引用到自身类名的也要改


class cHuman {
    static public $head = 1;

    public function say() {
        echo self::$head,'<br />';
    }


}

echo cHuman::$head,'<br />'; // 1

$lisi = new cHuman();
$lisi->say(); //



class Stu extends cHuman {
    static public $head = 2;

    public function say() {
        echo self::$head,'<br />';
        echo '父类只有',parent::$head,'<br />';
    }

}

$ming = new Stu();
$ming->say(); 


// ========一位同学的疑问,$this,还用parent====//
class a{
    public function a1(){
    echo 'this is class function a1()';
    }

}
class b extends a{
    public function b1(){
        $this->a1();
    }

    public function b2(){
        parent::a1();
    }
}

$b = new b();
$b->b1();
$b->b2();

/*
上面2个调用,显示效果一样的,
如果从速度角度看,理论上parent::稍快一点点.
因为在子类寻找a1方法,寻找不到,再去其父类寻找.

但是从面向角度看,继承过来的,就是自己的.
$this 更符合面向的思想.

举一个反例
class a {
}

class b extends a {
}

class c extends b {
}
...
...

class f extends e {
    parent::parent::parent::
    总不能这么写吧?
}

*/




