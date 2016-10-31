<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
smarty 的应用场景

在本页面,解决php与html代码混杂的问题
***/


?>


<?php
/*
// 模拟取数据库
$conn = mysql_connect();
$sql = select * from ....
*/

$title = '两会召开';
$content = '好会议,好房子,好奶粉';



/*
此时,03temp.html,把<?php echo
这种代码换成{}的形式

如果不换,就用php,行不行?
答:不仅行,而且行
好处: 原生php输出,不用解析标签,更多

很多知名程序就是这样做的
比如 wordpress, CI框架



为什么还要学习smarty呢?
答:
1:因为模板用的也非常广泛,
比如ecshop用的改进后的smarty模板
ThinkPHP用的自己写的模板
dedeCMS用的是自己的模板

工作中未必用smarty模板,但肯定会用到模板
而学了smarty之后,其他模板原理相似.

2:找工作需要smarty

3:体会模板的思想,争取自己能写模板
*/

/*

smarty的2个大版本,3,和2.6

区别: 2.6是PHP4时代的写作风格,
smarty3,是纯面向对象的写作风格.

我们学习以最新的smarty3.1.13来学习

*/


include('./03temp.html');

// 上面的显示显然不正常 {$content}直接显示出来了,
// 没有解析成数据
// 接下来,我们自己写一个迷你模板类,来解决这个问题

?>





