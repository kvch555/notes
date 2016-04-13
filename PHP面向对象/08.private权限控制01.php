<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

权限修饰符
作用: 用来说明 属性/方法的权限特点
写在 属性/方法前面

共有3个权限修饰符
private 私有的  , 保护的最严
protected 保护的 
public 公共的    ,保护的最松


疑问: 
public修饰的属性/方法,可以在哪儿访问?
private 修饰的属性/方法,可以在哪儿访问?


如何判断属性/方法 有没有权限访问?
答:看访问时的位置!

private的属性/方法,只能在类定义的大括号内{},才能访问
public 的属性, 在任意位置都可以访问


***/


/****
代码部分
****/

class Human {
    public $mood = ''; // 心情,公有
    private $money = 1000; // 钱,私有

    public function showMoney() {
        return $this->money;
    }

    private function secret() {
        echo '我小时候偷吃过一块肉';
    }

    public function tellMe() {
        $this->secret();
    }
}


$lisi = new Human();

$lisi->mood = 'happy';
echo $lisi->mood,'<br />'; // happy;


// echo $lisi->money; // 调用位置在54行,在Human类的{}外面 ,因此,调用失败
// $lisi->money = 500;


echo $lisi->showMoney(),'<br />';
/*
showMoney是公共的,在此行可以调用.
showMoney中的第48号,return $this->money; 
这一句运行的环境是在 类的{}内部,因此有权限访问 money属性
*/

// $lisi->secret(); // 不可以
$lisi->tellMe();    // 可以,因为是通过第56行,即,类内调用的.



/*
总结: private权限控制

只能在类的{} 内调用,
走出了{}, 谁也调不动.

*/



