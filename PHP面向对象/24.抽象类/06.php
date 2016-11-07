<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

抽象类的意义:

请看如下场景:
Facebook 多国语言欢迎页面

user登陆,有一个 c 字段,是其国家
当各国人登陆时,看到各国语言的欢迎界面


我们可以用面向过程的来做

if($c == 'china') {
    echo '你好,非死不可';
} else if($c =='english') {
    echo 'hi,welcome';
} else if($c == 'japan') {
    echo '搜达斯内';
}

反思: 当facebook进入泰国市场时,
增加 else if ,扩展性很差




$c = 'english';

if($c == 'china') {
    echo '你好,非死不可';
} else if($c =='english') {
    echo 'hi,welcome';
} else if($c == 'japan') {
    echo '搜达斯内';
}

***/


// =====用面向对象来做======//
/*
让美国小组/中国开发组/斯蜜达开发组 来开发Welcome类

争执不下: echo 到底该中? 日? 韩?

说: 干脆在wel()方法里,判断一下? 没意义啊

*/

abstract class Welcome {
    public abstract function wel();
}



// 这是首页的controller开发者
//$wel = new Welcome();
//$wel->wel();
/*
说:你们别争执了,我只知道,我要调用wel()方法,就是打招呼,
你们显示什么语言和我无关.
*/


/**
经理说话:
Welcome谁也不许动,各国开发小组开发自己的招呼类

另:为了首页的controller开发者便于调用,
统一继承自welcome类
**/



class china extends Welcome {
    public function wel() {
        echo '你好,非死不可,<br />';
    }
}


class english extends Welcome {
    public function wel() {
        echo 'hi,welcome';
    }
}


class japan extends Welcome {
    public function wel() {
        echo '搜达斯奈';
    }
}





// 再看首页开发者

$c = 'english'; // china, japan
$wel = new $c();
$wel->wel();


/*

以后新增了泰国语,首页的开发者,根本无需改动
只需要增加一个泰国的welcome类 就可以了.

所以有一些面向对象的介绍中,说面向对象的一个特点:可插拔特性

*/

