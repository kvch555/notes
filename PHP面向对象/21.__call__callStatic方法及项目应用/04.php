<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

__call 在thinkPHP中的应用
***/



class Action {
    public function bj() {
        echo 'bj天气预报';
    }

    public function __call($m,$args) {
        echo $m,'天气预报';
    }
}



$action = new Action();
$method = $_GET['method'];

if($method) {
    $action->$method();
}

