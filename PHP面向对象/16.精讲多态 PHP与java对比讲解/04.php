<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
PHP中的多态
***/


/****
代码部分
****/


class Light {

    // 开灯, 传一个玻璃参数
    public function ons($g) {
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




// 创建一个手电筒
$light = new Light();

// 创建3块玻璃
$red = new RedGlass();
$blue = new BlueGlass();
$green = new GreenGlass();


// 变红灯
$light->ons($red);

// 为蓝灯
$light->ons($blue);

// 变绿灯
$light->ons($green);


// 调用错了
$pig = new Pig();
$light->ons($pig);


/*****
分析 与java那段出错程序相比
php没报错,
因为PHP是弱类型动态语言.

一个变量  
$var = 8;
$var = 'hello';
$var = new Pig();

一个变量,没有类型,你装什么变量都行.

同理,传参,参数也没有强制类型.
传什么参都行.


所以,对于PHP动态语言来说,岂止是多态,简直是变态.



// 又有专家说, 你这个太灵活了,简直变态,不能这么灵活.
 否则我们就不说你多态.

答:别急,我们不让php这么灵活还不行吗
我对参数做类型限制总行了吧.
见下一页
*****/






