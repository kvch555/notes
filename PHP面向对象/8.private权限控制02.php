<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
看看权限控制的bug
***/


/****
代码部分
****/


class Human {
    private $money = 1000;

    public function getMoney($people) {
        return $people->money;
    }

    public function setMoney($people) {
        $people->money -= 500;
    }

}

$zhangsan = new Human();
$lisi = new Human(); 

// echo $lisi->money; // 不行

// 让李四去打探张三的钱
echo $lisi->getMoney($zhangsan),'<br />';

// 让李四去改变张三的钱
$lisi->setMoney($zhangsan);
echo $lisi->getMoney($zhangsan),'<br />';

print_r($zhangsan);



/*
奇怪之处在于, 
zhangsan的钱,应该有zhangsan来调用getMoney和setMoney才能影响.

但是和我们前一页面所写的原则是符合的:
即:
41行调用 getMoney,有权.
getMoney() 第26行,又在类的{}内,有权读取私有属性money

44行,调用setMoney,public 有权
setMoney()的第30行,修改zhangsan的money,发生在类的{}内,有权操作

*/









