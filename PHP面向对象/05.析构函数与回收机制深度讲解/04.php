<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

疑问:
1:把对象赋值为其他,比如true 会不会销毁对象？
 小K (21:07:15)
试了下，也可以


2:上一页的案例
为什么销毁一个  空2个  最后一个会出现在灰线下面？
答:
最后一次销毁,是PHP的页面执行完毕了,63行也执行完毕了.
然后系统回收, $d此时才销毁,
因此 显示hr 即灰线后面


***/


/****
代码部分
****/


/// 对象的回收机制 ///
class Human {

    public $name = '张三';
    public $gender = null;
    
    public function __destruct() {
        echo '死了!<br />';
    }

}


$a = new Human();
$b = $c = $d = $a;


echo $a->name,'<br />';
echo $b->name,'<br />';

$b->name = '李四';
echo $a->name,'<br />';
echo $b->name,'<br />';



unset($a);   // $b,$c,$d在指向对象,因此对象不能销毁.

echo '<hr />';

/*
1:死几次
2:死上灰线上,还是死在灰线下
*/

/*
在此处,页面运行完毕,对象销毁,执行析构函数.
销毁了几个对象? 

答:
只有一个对象,只死1次
死在系统回收时,即页面执行完毕,因此在灰线下.
*/



