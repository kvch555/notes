<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
单例模式

先看场景:
多人协同开发, 都要调用mysql类的实例
如果用svn知道,好多人一起开发,再提交各自的文件.

A:
$mysql = new mysql();
$mysql->query....
测试通过


B:
$db = new mysql();
测试通过

...
...

两人的代码要合到一块,如下
$mysql = new mysql();
$mysql->query....
$db = new mysql();

两个mysql类的实例,
而且,每new一下,还要连接一次数据库.

显然,一个页面呢,有一个mysql类的实例就够了.

如果限制,让多人开发,无论你怎么操作,只能得到一个对象呢?

1:开会时,经理说:有一个$db变量,是系统自动初始化的,就是mysql类的实例.
大家都用他.谁敢new mysql(),开除.

2:这是行政手段,不能阻止技术上的new mysql()行为.
我们可以从技术上,用单例模式来解决


注:单例常用也常考,请认真练习
***/

echo '<pre>';

/*
第一步:一个普通的类
这个普通类,可以new 来实例化
这显然不是单例

class single {
    
}

$s1 = new single();
$s2 = new single();
$s3 = new single();
*/


/*
第二步:看来new是罪恶之源,干脆不让new了
我们把构造方法 保护/私有
外部不能new了
--但引出一个问题,不能new,那得不到对象,这不是单例,这是0例模式


class single {
    protected function __construct() {
        
    }
}

$s1 = new single();

*/


/*
第三部,通过内部的static方法,来调用

class single {
    public $hash; //随机码


    protected function __construct() {
        $this->hash = mt_rand(1,99999);
    }

    static public function getInstance() {
        return new self();
    }

}

$s1 = single::getInstance();
$s2 = single::getInstance();
*/
/*
两个对象什么时间相等?
答:只有指向一个对象地址的时候,才相等.


print_r($s1);
print_r($s2);

if($s1 === $s2) {
    echo '是一个对象';
} else {
    echo '不是一个对象';
}
*/




/*
第四步,通过内部的static方法实例化,
并且,把实例保存在类内部的静态属性上
*/
class single {
    public $hash; //随机码

    static protected $ins = NULL;

    protected function __construct() {
        $this->hash = mt_rand(1,99999);
    }

    static public function getInstance() {
        if(self::$ins instanceof self) {  // instance实例 of谁的, 
                                            //专门判断某个对象是不是某个类的实例 用的
            return self::$ins;
        }
        
        self::$ins = new self();
        return self::$ins;
    }

}

$s1 = single::getInstance();
$s2 = single::getInstance();



print_r($s1);
print_r($s2);

if($s1 === $s2) {
    echo '是一个对象';
} else {
    echo '不是一个对象';
}


//===========看问题===============//

class test extends single {
    public function __construct() {
        parent::__construct();
    }
}


$t1 = new test();
$t2 = new test();

print_r($t1);
print_r($t2);

// 问题1:我们辛苦写的单例,继承一下就不灵了.


// 解决 final 最终的 详见05.php





class s {
    public $hash; //随机码

    static protected $ins = NULL;

    final  protected function __construct() {
        $this->hash = mt_rand(1,99999);
    }

    static public function getInstance() {
        if(self::$ins instanceof self) {  // instance实例 of谁的, 
                                            //专门判断某个对象是不是某个类的实例 用的
            return self::$ins;
        }
        
        self::$ins = new self();
        return self::$ins;
    }

}


class t extends s {
     
}

$t1 = t::getInstance();
$t2 = t::getInstance();

$t3 = clone $t2;

if($t1 === $t2) {
    echo '是一个对象<br />';
} else {
    echo '不是一个对象<br />';
}


if($t3 === $t2) {
    echo '是一个对象<br />';
} else {
    echo '不是一个对象<br />';
}

// clone又多出一个对象, 试问,如何解决?
// 提示: 请看魔术方法 clone!
// 魔术方法很多, __construct, __destruct, __clone,__callstatic....
// 请同学们自行预习 


