<?php

/**
人类


声明语法:
class 类名 {
}

这个类,没有属性,也没有方法
**/


class People {
    // public 的含义先别管
    public $name = 'nobody';
    public $height = 30;

    public function cry() {
        echo '呱呱坠地';
    }
}



/****
有了类,就可以产生对象了.
如何类来产生对象?

new 类名(); 这个语句返回对象

返回的对象 赋给一个变量
****/


$a = new People();

print_r($a);

/***
这个a是什么 ,a对象
就是一个箱子,里面装了N多属性和属性值
$a = {name:nobody,height:30}

可以看出 $a是一个复合数据,
我们要想访问$a的名字,即$a里面 name的值,
我们可以怎么访问呢?

答:肯定是得通过$a来访问了.
$a->属性名,就可访问该属性的值
***/


echo $a->name,'<br />',$a->height,'<br />';


$b = array('name'=>'nobodyB','height'=>'40B');
echo $b['name'],'<br />',$b['height'];



echo '<br />';

// ==== 对象调用其方法====//
$a->cry();

