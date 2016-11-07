<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
递归对数组进行转义
***/


// 这是一个3维数组
$arr = array('a"b',array("c'd",array('e"f')));



// 先写一个1维数组的转义函数
function _addslashes($arr) {
    foreach($arr as $k=>$v) {
        if(is_string($v)) {
            $arr[$k] = addslashes($v);
        } else if(is_array($v)) {  // 再加判断,如果是数组,调用自身,再转
            $arr[$k] = _addslashes($v);
        }
    }
    
    return $arr;
}

print_r(_addslashes($arr)); // 递归转义后的数组

print_r($arr);      // 原来的值


// 这个递归 就没有用到引用传参

//  如果确定要改全局的$arr,可以把转义的返回值,再次赋给$arr

$arr = _addslashes($arr);










