<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

思考:
02.php中的常量/变量 ,和03.php毫无关系,
因此,02.php中做了用户名/密码的验证,到03.php,使不上.

总不能每个页面都需要提交用户名/密码吧.


生活中的场景:
一群人,买豆浆,也不排队,乱哄哄的
豆浆现磨.
先交钱,交完钱蹲在一边等.



这个老板----非常健忘! 记忆时间:转脸就忘.

李四给老板钱<--->"大杯黄豆!"  交互结束.

李四来取豆浆时(这已经是和老板再一次打交道了),
而老板早已忘的干干净净.

请问:如何帮助老板记住客户!!!


解决方案:
每当有人交完钱,
老板发给他一个小纸片:
"红豆1杯","绿豆一杯","黄豆一杯" 


当你来取豆浆时,拿着牌子来!

***/


// 给你牌子!

setcookie('user','zhangsan');
echo '给你zhangsan牌子!';









