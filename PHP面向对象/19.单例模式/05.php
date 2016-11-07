<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
final 最终的
这个关键词 在PHP中,可以修饰类,方法名,但不能修饰属性

final 修饰类,则此类 不能够被继承

final 修饰方法,此方法不影响继承,但是此方法 不允许重写


在java中,final也可以修改属性,此时属性值,就是一个常量,不可修改.
问:PHP的类中,可不可以有常量.
答:有
***/

/*
final class Human {

}


class Stu extends Human {
}
*/
/*
不能继承自最终的类
Fatal error: Class Stu may not inherit from final class (Human)
*/



class Human {
    final public function say() {
        echo '华夏子孙';
    }

    public function show() {
        echo '哈哈';
    }
}


class Stu extends Human {
}


$ming = new Stu();
$ming->say(); // final 方法可以继承


class FreshMan extends Stu{
    public function say() {
        echo '我要出国,做美利坚人';
    }
}
/*
Fatal error: Cannot override final method Human::say()
*/







