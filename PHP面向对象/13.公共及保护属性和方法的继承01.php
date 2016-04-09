<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

子类继承父类的属性/方法,可以修改或增加

***/


/****
代码部分
****/

class sixty {
    protected $wine = '1斤';

    public function play() {
        echo '谈理想<br />';
    }
}


class nine extends sixty{
    public function play() {
        echo '玩网游,宅!<br />';
    }

    public function momo() {
        echo '妹子,认识一下<br />';
    }

    public function showW() {
        echo $this->wine,'<br />';
    }
}


$s9 = new nine();

$s9->showW(); echo '<br />';  // 父类有的,继承过来

$s9->play(); //  父类有的,继承过来,可以修改/覆盖(overide).

$s9->momo(); // 父类没有,可以添加


/***
上面所说的继承过来的大环境,
是指 protected /public  
**/






