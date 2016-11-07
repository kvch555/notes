<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/



/****
代码部分
****/



class Human {
    public $name = 'lisi';

    public function who() {
        echo $this->name;
    }

    public function test() {
        echo $name;
    }

}

$a = new Human();


echo $a->name,'<br />'; // lisi

$a->who();


/*
和java,c++相比
方法体内想访问调用者的属性,必须用$this
如果不加,则理解为方法内部的一个局部变量.
*/
$a->test();



/******
从生活中的角度来理解$this

女娲造人时, 造了一个"悔恨"的方法

{
    抓[自己]头发
    抽 [自己] 脸

}

世界上的人那么多, 
悔恨时,抓谁的头发?
抽谁的脸?


张三,李四? 王五? 都不能说明合理的情况
只能理解为"自己"
******/


