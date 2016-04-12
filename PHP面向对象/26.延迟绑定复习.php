<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

***/

class Animal {
    const age = 1;
    public static $leg = 4;

    public static function cry() {
        echo '呜呜<br />';
    }

    public static function t1() {
        self::cry();
        echo self::age,'<br />';
        echo self::$leg,'<br />';
    }

    public static function t2() {
        static::cry();
        echo static::age,'<br />';
        echo static::$leg,'<br />';
    }

}


class Human extends Animal {
    public static $leg = 2;

    public static function cry() {
        echo '哇哇<br />';
    }
}

class Stu extends Human {
    const age = 16;

    public static function cry() {
        echo '嘤嘤<br />';
    }
}

Stu::t1(); //呜呜,1,4
Stu::t2(); // 嘤嘤,16,2







