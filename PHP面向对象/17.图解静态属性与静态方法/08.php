<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
静态方法

static public/protected/private function t() {
}


普通方法,存放于类内的,只有1份
静态方法,也是存放于类内的,只有1份


区别在于: 普通方法需要对象去调动, 需要绑定$this
即,普通方法,必须要有对象,用对象调动


而静态方法, 不属性哪个对象,属于类,因此不需要去绑定$this,
即, 静态方法,通过类名就可以调动
***/



class Human {
    public $name = '张三';

    static public function cry() {
        echo '5555';
    }

    public function eat() {
        echo '吃饭';
    }

    public function intro() {
        echo $this->name;
    }
}


// 此时一个对象都没有
Human::cry();



/*
下面这个eat方法是一个非静态方法,应由对象来调用
但是呢,调用了,也没出问题
*/
Human::eat();

/*
接上,但从逻辑来理解, 如果用类名静态调用非静态方法
比如 intro() 
那么: $this 到底是指哪个对象???

因此,直接报错
Fatal error: Using $this when not in object context in D:\www\1109\08.php on line 45
*/

// Human::intro();




/*
如上分析,其实非静态方法,是不能由类名静态调用的.
但是! PHP中的面向对象检测的并不严格,
只要该方法没有$this,就会转化静态方法来调用.
因此,cry()可以调用.


但是,在PHP5.3的strict级别下,或者PHP5.4的默认级别
都已经对类名::非静态方法做了提示


则会提示:Strict Standards: Non-static method Human::eat() should not be called statically 
不能静态的去调用非静态方法
*/


Error_reporting(E_ALL|E_STRICT);

Human::eat();

/***
因此此原因导致的典型问题,欢迎解答
http://www.zixue.it/forum.php?mod=viewthread&tid=3756&extra=page%3D1
***/



// 动访问静
$lisi = new Human();
$lisi->cry(); // 5555


/*
类->访问->静态方法 可以
类->动态方法  方法内没有this的情况下,但严重不支持.逻辑上解释不通.

对象-->访问动态方法  可以
对象-->静态方法     可以
*/





