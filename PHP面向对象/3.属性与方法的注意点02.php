<?php
// 方法的注意点

function t() {
    echo 't';
}

// 这个t是我的自定义函数
t();


// 我再定义一个t函数
/*
Fatal error: Cannot redeclare t() (previously declared in D:\www\1105\05.php:5) in D:\www\1105\05.php on line 16
function t() {
    echo 'tt';
}

PHP中函数不能重复定义
这点和js不一样
*/

/**
time是系统函数,因此你也不能再次定义
function time() {
    
}
**/


/***
但是,类中的方法,可以理解"包在类范围内的函数"
和全局的函数不是一回事,
因此,可以重名
***/


class clock {
    public function time() {
        echo '现在的时间戳是aaaa';
    }

    public function t() {
        return '内部的t';
    }

    public function time2() {
        echo '现在的真正时间戳是',time(),'<br />';  // 注意此处调用的是系统的time()函数
        echo $this->t();   // 注意,此处调用的是自身的t函数;
    }

}



$c = new clock();
$c->time();
echo '<br />';
$c->time2();




