<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
类的自动加载

***/


require('./HumanModel.php');

$lisi = new HumanModel();
$lisi->t();

/*
如上,没有require时,报错
手动require进来

如果网站比较大,model类比较多
HumanModel
UserModel
GoodsModel
CatModel
OrderModel
...
...
...
...



1:这么多的model,我用谁,就得include/require谁.

2:而且不知道,之前是否已经include/require进来某个类
(这个用once可以解决,但once的效率很低)


这时 我们可以用自动加载!
*/

echo '<br />';


function __autoload($c) {
    echo '~~~~',$c,'~~~~~';
}

$ming = new Pig();


/*

如果调用某个不存在的类,
在报错之前,
我们还有一次介入机会 __autoload函数

系统会调用__autoload()函数,
并把"类名"自动传给__autoload函数

我们自然可以在__autoload里 加载需要的类!

见下页
*/




