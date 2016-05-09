<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
探讨session的生命周期!

我们知道,一个session,有2方面的数据共同发挥作用
1:客户端的cookie
2:服务器端的session文件

要想让session失效,也是要从这2个角度来考虑

在php.ini里, 如下选项,控制sessionid的cookie的生命周期,秒为单位
session.cookie_lifetime = 15

注意:如果用户篡改了cookie,让cookie的生命周期为1年,那你也判断不出来.


如果想严格的让session就半小时有效,可以这样:
$_SESSION['time'] = 登陆时的时间戳

检验session的开启时间!
***/


/**
session的有效路径!

session的有效,取决于cookie,
cookie在哪儿有效,session自然就能读到

PHP如下选项,指定了sessionid这个cookie的有效路径是 / 路径,
自然session无论在多深的目录下设置,而session在整站都有效.

; The path for which the cookie is valid.
; http://php.net/session.cookie-path
session.cookie_path = /
**/


/**
cookie只能存储字符串/数字这样的标量数据
而session还可以存储数组/对象 (除了资源型,其他7种都可以)


请注意:如果你把对象存储到session里,
那么另一个读取session的页面,也必须有此对象对应的类声明才合理.

否则,从session里分析出一个对象,却没有与之对应的类,则会提示:
__PHP_Incomplete_Class Object 
**/


/**
从http协议的角度看
cookie信息是放在头信息里传输的,

自然,使用cookie之前,不能有任何主体信息的输出,空白也不行
Warning: session_start() [function.session-start]: Cannot send session cache limiter - headers already sent

如果你仔细检测,没有空白,请检查BOM信息
**/




