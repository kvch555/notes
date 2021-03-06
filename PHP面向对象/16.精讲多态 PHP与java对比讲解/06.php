<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/



class Light {

    // 此处,仿java,也加一个类名,做参数类型检测
    public function ons(int $g) {  
        // 用玻璃渲染颜色
        $g->display();
    }
}


class Glass {
    public function display() {
    }
}


class RedGlass extends Glass{
    public function display() {
        echo '红光照耀<br />';
    }
}


class BlueGlass extends Glass {
    public function display() {
        echo '蓝光照耀<br />';
    }
}

class GreenGlass extends Glass {
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



// 猪八戒降生
$pig = new Pig();
$light->ons($pig);


/****
如果按PHP本身特点,不检测类型,
本身就可以说是多态的,甚至变态的.

但是PHP5.3以后,引入了对于对象类型的参数检测,
注意 只能检测对象所属的类

其实,这对于PHP来说,限制了其灵活性,达到的java中多态的效果.



反思多态:
其实就是
只抽象的声明父类, 具体的工作由子类对象来完成
这样,不同的子类对象完成,有不同的特点.
****/



