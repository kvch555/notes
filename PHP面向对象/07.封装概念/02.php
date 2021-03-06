<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
继续来看封装,在方法上的体现

***/


/****
代码部分
****/


class Human {
    private $money = 1000;
    private $bank = 2000;

    private function getBank($num) {
        $this->bank -= $num;

        return $num;
    }

    public function send($much) {
        if($much > $this->money + $this->bank) {
            return false; 
        } else if($much > $this->money){
            $num = $much - $this->money; //算算要从银行取多少钱?
            $this->money += $this->getBank($num); //从银行取出钱,加到现金里

            $this->money -= $much; // 再把钱借给朋友.
            return $much;
        } else { // 直接现金借          
            $this->money -= $much;
            return $much;
        }
    }

    public function showMoney() {
        return $this->money;
    }

    public function showBank() {
        return $this->bank;
    }
}



$lisi = new Human();

$m = $lisi->send(300);

if($m) {
    echo '借了',$m,'元<br />';
    echo '还剩下',$lisi->showMoney(),'元<br />';
}


/// 再借 2000 元

$m = $lisi->send(2000);
if($m) {
    echo '借了',$m,'元<br />';
    echo '还剩下',$lisi->showMoney(),'元<br />';
    echo '银行还有',$lisi->showBank(),'元,<br />';
}

/*
在上个例子中, 
借钱者,只知道,借成功了,还是借失败了.

至于,如果借成功了,lisi是怎么样把钱凑齐的,
借钱者不会知道lisi也许跑了趟银行,再把钱凑齐.


就像同学们,只需要 每周一到周五,晚8点到10点来听课.
至于后面,老师的备课,拉网线,等等,你们不需要知道.


对于一个对象,对外界开放一个接口,
调用接口时,内部进行的操作,不需要让外界知道.
隐藏了内部的一些实现细节.

这是对方法的封装.


生活中的封装很常见:
电视机, 
开电源 一个动作
[隐藏的内部动作: 触发显像管,接线无线电信息,调频 等等]


洗衣机:
扔衣服,通电.
[自动加水,洗,漂,脱水]

*/




