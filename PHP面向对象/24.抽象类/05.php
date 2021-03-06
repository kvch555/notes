<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
抽象类: 无法实例化
类前加 abstract, 此类就成为抽象类,无法实例化.


春秋战国时期,燕零七 飞行器专家,能工巧匠.

他写了一份图纸---飞行器制造术

飞行器秘制图谱
1: 要有一个有力的发动机,喷气式.
2: 要有一个平衡舵,掌握平衡

他的孙子问: 发动机怎么造呢?
燕零七眼望夕阳: 我是造不出来,但我相信后代有人造出来



总结:
类前加 abstract 是抽象类
方法前加 abstract 是抽象方法

抽象类 不能 实例化
抽象方法 不能有 方法体

有抽象方法,则此类必是  抽象类
抽象类,内未必有抽象方法

但是 --- 即便全是具体方法,但类是抽象的,
也不能实例化.

***/


/****
代码部分
****/


// 燕零七的构想,当时的科技造不出来,即这个类只能在图纸化,无法实例化.
// 此时这个类没有具体的方法去实现,还太抽象.
// 因此我们把他做成一个抽象类
abstract class FlyIdea {
    // 大力引擎,当时也没法做,这个方法也实现不了
    // 因此方法也是抽象的
    public abstract function engine();

    // 平衡舵
    public abstract function blance();

    /*
        注意:抽象方法 不能有方法体
        下面这样写是错误的
        public abstract function blance() {
        }
        Fatal error: Abstract function FlyIdea::engine() cannot contain body
    */
}

/*
抽象类不能 new 来实例化
下面这行是错误的
$kongke = new FlyIdea();
Cannot instantiate abstract class FlyIdea
*/



// 到了明朝,万户用火箭解决了发动机的问题
abstract class Rocket extends FlyIdea {

    // 万户把engine方法,给实现了,不再抽象了
    public function engine() {
        echo '点燃火药,失去平衡,嘭!<br />';
    }

    // 但是万户实现不了平衡舵,
    // 因此平衡舵对于Rocket类来说,
    // 还是抽象的,
    // 类也是抽象的
}



/*
到了现代,燕十八亲自制作飞行器
这个Fly类中,所以抽象方法,都已经实现了,不再是梦想.
*/ 

class Fly extends Rocket{
    public function engine() {
        echo '有力一扔<br />';
    }

    public function blance() {
        echo '两个纸翼保持平衡~~~';
    }

    public function start() {
        $this->engine();
        for($i=0;$i<10;$i++) {
            $this->blance();
            echo '平稳飞行<br />';
        }
    }
}



$apache = new Fly();

$apache->start();




abstract class Car {
    public function run() {
        echo '滴滴';
    }
}


class qq extends Car {
}

$qq = new qq();
