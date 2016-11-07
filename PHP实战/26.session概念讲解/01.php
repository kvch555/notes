<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
cookie复习


cookie的工作流程:
由服务器发送给浏览器一个cookie(牌子)
以后再访问时,由浏览器带着cookie(牌子),服务器检测cookie的信息


如何设置cookie: setcookie()函数
如何读取cookie: $_COOKIE[] 超级全局数组


问: cookie由浏览器带着的,那么如何被篡改了,怎么办?

比如:你买的奶酪,你把单据改成"蛋糕",如何防范?


因为cookie是很容易被篡改或伪造的,
因此,cookie往往用来记住用户名,浏览历史,等安全性要求不高的地方.

能否防范呢? 
答:能,可以用session技术
也可以通过一些加密技巧来防范.

先用session来处理
***/




setcookie('user','lisi');
echo 'OK';


