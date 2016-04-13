<?php

// 声明类的时候,注意点.

/*
1:关于属性值,可以声明属性并赋值,也可以声明属性先不赋值
如果不赋值,则属性的初始值是NULL


2: 关于PHP中的类,请注意,属性必须是一个"直接的值"
是8种类型任意的"值".

不能是: 表达式 1+2 的值
不能是: 函数的返回值 time();

这点和java不一样.
*/

class Human {
    // public $age = time(); // 错误
    // public $age = 1+2; // 错误
}


$a = new Human();
echo $a->age,'<br />';


class People {
    public $age;
}

$b = new People();
var_dump($b->age);
echo '<br />';




?>