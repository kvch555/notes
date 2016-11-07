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


function test() {
    // 函数内可以写任何合法的PHP代码,包含再声明一个函数/类
    echo '来';
    class Bird {
        public static function sing() {
            echo '百灵鸟儿放声唱!';
        }
    }

    echo '去';
}


// Bird::sing();   // Class 'Bird' not found





