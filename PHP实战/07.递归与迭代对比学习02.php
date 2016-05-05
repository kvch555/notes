<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
理论上:(借助栈)递归都是可以转化为迭代的!
***/



/*
迭代来创建级联目录
./a/b/c/d

思路:要把从浅到深创建目录的步骤,列成单子.
然后1只小猴,一层层的去创建
*/

function mk_dir($path) {
    $arr = array();
    
    while(!is_dir($path)) {
        // 例 /a/b/c/d 如果不目录,则是我的工作
        array_push($arr,$path); //工作计划入栈
        $path = dirname($path);
    }

    //print_r($arr);

    if(empty($arr)) {
        return true;
    }

    // 工作计划出栈
    while(count($arr)) {
        echo $tmp = array_pop($arr),'出栈<br />';
        mkdir($tmp);
    }

    return true;
}


mk_dir('./a/b/c/d/e');

