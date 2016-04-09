<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

面向对象三大特征:
封装 继承 多态

封装:



***/


/****
代码部分
****/

/*
class Human {
    public $money = 1000;
}


$lisi = new Human();
echo $lisi->money,'<br />'; // 1000

// 变一下money
$lisi->money = 500;
echo $lisi->money,'<br />'; // 500
*/
/*
李四的钱,别人问他有多少钱,他就如实说.
别人把他的钱减少,立即减少了.

如果在现实生活中,这个现象显然不合理,
我们需要把钱保护起来

public 是公共的,即大家都可以来读取,操作
钱显然不应该是公共的
*/


class Human {
    private $money = 1000;

    public function showMoney() {
        return $this->money * 0.8;
    }
}


$lisi = new Human();

/*
在下例中,调用失败,因为money是私有和,
在外部,不能够被调用
这时,我们就把money "封起来"了

注意:光封起来,是没有意义的,因为money这个属性还得与外界有所交互才行.

*/
// echo $lisi->money,'<br />'; // 1000


// 你不能直接翻别人口袋,看别人有多少钱.
// 但是,可以问别人有多少钱

/*
把某些重要属性 封装起来,然后通过一个开放的接口来操作.
这就实现的对属性的封装.
*/

echo $lisi->showMoney();





