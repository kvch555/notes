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

class Light {

    // 此处,仿java,也加一个类名,做参数类型检测
    public function ons(RedGlass $g) {  
        // 用玻璃渲染颜色
        $g->display();
    }
}


class RedGlass {
    public function display() {
        echo '红光照耀<br />';
    }
}


class BlueGlass {
    public function display() {
        echo '蓝光照耀<br />';
    }
}

class GreenGlass {
    public function display() {
        echo '绿光照耀<br />';
    }
}


class Pig {
    public function display() {
        echo '八戒下凡,哼哼坠地!<br />';
    }
}


// 造手电筒
$light = new Light();


// 造红玻璃
$red = new RedGlass();

// 造蓝玻璃
$blue = new BlueGlass();

// 红灯亮
$light->ons($red);

// 蓝灯亮
$light->ons($blue);

/**

Catchable fatal error: Argument 1 passed to Light::ons() must be an instance of RedGlass, instance of BlueGlass given, called in D:\www\1109\05.php on line 72 and defined in D:\www\1109\05.php on line 24


加了类型检测后,果然传蓝玻璃不行.

解决:参数定为父类,传其子类.

哲学: 子类是父类, 例:男人是人,白马是马,蓝玻璃是玻璃.

里氏代换: 原能用父类的场合,都可以用子类来代替.


见下一页的解决
**/

