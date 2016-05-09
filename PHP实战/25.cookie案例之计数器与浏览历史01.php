<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
用cookie来完成浏览历史功能,


之前 先做一个cookie计数器来练手
***/





// 用cookie来记录来本网站已经访问了多少页面



// 如果这个页面是第1次访问,没有cookie信息
/*
if(!isset($_COOKIE['num'])) { // 第一次来访问,还没有cookie
    setcookie('num',1);
} else {        // 有cookie信息,已经不是第1次来访问了.
    setcookie('num',$_COOKIE['num'] + 1);
}


echo '这是你的第',$_COOKIE['num'],'次访问';
*/




if(!isset($_COOKIE['num'])) { // 第一次来访问,还没有cookie
    $num = 1;
    setcookie('num',$num);
} else {        // 有cookie信息,已经不是第1次来访问了.
    $num = $_COOKIE['num'];
    setcookie('num',$num + 1);
}


echo '这是你的第',$num,'次访问';



