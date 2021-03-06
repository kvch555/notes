<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
private
protected
public 
三者的区别


        private     protected       public
本类内     Y           Y              Y
子类内     N           Y              Y
外部       N           N              Y


注意:
在java中,如果属性/方法前面不写任何参数
即public/protected/private都不写,也是可以的,friendly

在PHP中,如果public/protected/private 都不写,
则理解为 public 建议养成好习惯,不要不写



***/


/****
代码部分
****/


class Human {
    private $name = 'zhangsan';
    protected $money = 3000;
    public $age = 28;

    public function say() {
        echo '我叫',$this->name,'<br />';
        echo '我有',$this->money,'元钱<br />';
        echo '我今年',$this->age,'岁';
    }
}



class Stu extends Human {
    private $friend = '小花';

    public function talk() {
        echo '我叫',$this->name,'<br />';
        echo '我有',$this->money,'元钱<br />';
        echo '我今年',$this->age,'岁<br />';        
    }
}


$ming = new Stu();
echo $ming->age,'<br />'; // 28

// 下行错,因为类外不能调用private
// echo $ming->friend; 

// 下行错,因为类外不能调用protected属性
// echo $ming->money;

/*
总结: 
public 可以在类外调用,权限最为宽松
protected和 private不能在类外调用

?? public 在类内调用行不行
答:当然行,类外都可以,权限很宽松,类内自然没问题.
*/


/*
下一行执行时
Notice: Undefined property: Stu::$name in D:\www\1109\02.php on line 44
我有3000元钱
我今年28岁

分析原因: Undefined property: Stu::$name 这是说明:stu对象 没有name属性
但昨天说,私有的不是可以继承吗?
是可以继承过来,但系统有标记,标记其为父类层面的私有属性.
因此无权调用,导致此错发生.


可以分析出:
protected 可以在 子类内访问

?? protected能在子类访问,本类内能否访问?
答:当然可以
*/
$ming->talk();



echo '<hr />'; 

$yuanmou = new Human();
$yuanmou->say();







