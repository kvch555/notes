<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
要想理解递归,你必须理解电影中的"慢动作".
要把函数的运行过程理解的非常慢
***/


/*
函数 调用 开始 执行
碰到 return 或 执行到最后结束
*/


function sum($n) {
    if($n>1) {
        $tmp = sum($n-1) + $n;
        echo $n,'<br />';
        return $tmp;
    } else {
        echo 1,'<br />';
        return 1;
    }
}

echo sum(5);



