<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

***/


/****
代码部分
****/


class Human {

    public $name = '张三';
    public $gender = null;
    
    public function __destruct() {
        echo '死了!<br />';
    }

}


$e = $f = $g = new Human();
unset($e);
echo 'unset e<br />';

unset($f);
echo 'unset f<br />';

unset($g);
echo 'unset g<br />';

/*
unset e
unset f
死了
unset g;
*/
