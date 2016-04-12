<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
魔术方法:
是指某些情况下,会自动调用的方法,称为魔术方法
PHP面向对象中,提供了这几个魔术方法,
他们的特点 都是以双下划线__开头的

__construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __toString(), __invoke(), __set_state() 和 __clone() 


__construct :构造方法
__destruct  :析构方法

__clone()   :克隆方法,当对象被克隆时,将会自动调用

***/

/*
__clone()   :克隆方法,当对象被克隆时,将会自动调用
class Human {
    public $age = 22;

    public function __clone() {
        echo '有人克隆我!假冒';
    }
}


$lisi = new Human();

$zhangsan = clone $lisi;
*/


// 接下来讲6个,在项目中,尤其是自己想写框架时,很实用的几个函数
/*
__call(), __callStatic(), __get(), __set(), __isset(), __unset(),
*/

/*
class Human {
    private $money = '30两';
    protected $age = 23;
    public $name = 'lily';

}


$lily = new Human();
echo $lily->name; //lily

//echo $lily->age; // 权限错误
// echo $lily->sister; // Undefined property:
*/


class Human {
    private $money = '30两';
    protected $age = 23;
    public $name = 'lily';

    public function __get($p) {
        echo '你想访问我的',$p,'属性 :)';
    }
}

$lily = new Human();
// echo $lily->name; //lily
echo $lily->age; // '你想访问我的age属性 :)
echo $lily->money; // 你想访问我的money属性 :)
echo $lily->friend; // 你想访问我的friend属性 :)

/*
可以总结出:
当我们调用一个权限上不允许调用的属性,和不存在的属性时,
__get魔术方法会自动调用,
并且自动传参,参数值是属性名.

流程:
$lily->age--无权-->__get(age);
$lily->friend--没有此属性-->__get('friend');

生活中,你帮别人看守小卖店
买牙刷--->好,给你牙刷
买毛巾--->好,给你毛巾

这个POS机挺好---> (pos是商店的工具,私有的,不卖的:"你无权买"), 但是我们用__get方法,
就有一个友好的处理机会.

系统会直接报错,甚至fatal error,通过__get,我们就能自定义用户访问时,的处理行为.
*/

echo '<br />';

$lily->aaa = 111;
$lily->bbb = 222;

print_r($lily);
/*
竟然给加上了.
其实,对象就是一个属性集,在js中更明显.
如果这么随便就能加了属性,导致这个对象属性过多,不好管理
*/


class Stu {
    private $money = '30两';
    protected $age = 23;
    public $name = 'Hmm';    

    public function __set($a,$b) {
        echo '你想设置我的',$a,'属性','<br />';
        echo '且值是',$b,'<br />';
    }
}

echo '<hr />';

$hmm = new Stu();

$hmm->aaa = 111;
$hmm->money = '40两';
$hmm->age = '28';
print_r($hmm);


$hmm->name = 'HanMM';
print_r($hmm);

/*
如上,总结出  __set的作用
当为无权操作的属性赋值时,
或不存在的属性赋值时,
__set()自动调用

且自动传2个参数 属性 属性值
例:
$hmm->age = 28 ---无权---> __set('age',28);

*/


///// === __isset  __unset ====

echo '<hr />';

class Dog {
    public $leg = 4;
    protected $bone = '猪腿骨';

    public function __isset($p) {
        echo '你想判断我的',$p,'属性存不存在<br />';

        return 1;
    }

    public function __unset($p) {
        echo '你想去掉我的',$p,'?!<br />';
    }
}

$hua = new Dog();

if(isset($hua->leg)) {
    echo $hua->leg;
}

if(isset($hua->tail)) {
    echo '有tail属性';
} else {
    echo '没有tail';
}

/***
__isset() 方法,
当 用isset() 判断对象不可见的属性时(protected/private/不存在的属性)
会引发 __isset()来执行

问: isset($obj->xyz) 属性,为真,
能说明  类声明了一个xyz属性吗?
答:不能
***/


echo '<hr />';
echo '__unset测试';
print_r($hua);
unset($hua->leg);
print_r($hua);


unset($hua->tail);
unset($hua->bone);

/***
__unset()方法
当 用unset 销毁对象的不可见属性时,
会引发 __unset();

unset($hua->tail)----没有tail属性---->__unset('tail');
***/