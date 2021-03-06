<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
接口的具体语法:
0:以人类为, class Human 是人的草图
而接口 是零件
可以用多种零件组合出一种新特种来.

1: 如上,接口本身即是抽象的,内部声明的方法 默认也是抽象的.
不用加 abstract

2: 一个类可以一次性实现多个接口.
语法用 implements 实现 (把我这几个功能实现了)
class ClassName implements interface1,interface2,interface3 {
}
然后再把接口的功能给实现.


3: 接口也可以继承, 用extends

4:接口是一堆方法的说明,不能加属性

5:接口就是供组装成类用的,封闭起来没有意义,因此方法只能是public

***/

interface animal {
    protected function eat();
}

interface monkey extends animal {
    public function run();
    public function cry();
}

interface wisdom {
    public function think();
}

interface bird extends animal{
    public function fly();
}

/*
// 下面有误,monkey继承的aniaml接口,因此必须要把eat()实现
class Human implements monkey,wisdom {
    public function run() {
        echo '走';
    }

    public function cry() {
        echo '哭';
    }

    public function think() {
        echo '思考';
    }
}
*/


class Human implements monkey,wisdom {
    public function eat() {
        echo '吃';
    }

    public function run() {
        echo '走';
    }

    public function cry() {
        echo '哭';
    }

    public function think() {
        echo '思考';
    }
}