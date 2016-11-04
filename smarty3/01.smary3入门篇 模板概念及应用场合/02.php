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



include('./02temp.html');



/*
此时,02temp.html里的php,只负责echo,且只echo数据
因此,可以说,我们已经完成业务(取数据库,操作数据的过程)
与表现(html布局,css)的分离

controller与view的分离.

如果你看着模板里的<?php 标签还不舒服,
可以用smarty,进一步分离.
*/

?>





