<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
普通常量   define('常量名',常量值);
以前说过: define定义的常量 ,全局有效.
无论是页面内,函数内,类内,都可以访问.


能否定义 专门在类内发挥作用的常量
专门在类内发挥作用  说明
1:作用域在类内,类似于静态属性
2:又是常量,则不可改.

其实就是"不可改变的静态属性"


类常量 在类内用 const 声明即可
前面不用加修饰符,
而且权限是public的,即外部也可以访问


***/


/****
代码部分
****/



define('ACC','Deny');


class Human {
    const HEAD = 1;

    public static $leg = 2;

    public static function show() {
        echo ACC,'<br />';
        echo self::HEAD,'<br />';
        echo self::$leg,'<br />';
    }

}

Human::show();

echo Human::HEAD;
