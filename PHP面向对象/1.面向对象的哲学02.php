<?php
/*
张三
张三的智商
张三打招呼

车
车撞人



以往我们分析:
收到什么数据
做什么判断
各自再怎么处理....


我们把张三看成一个对象
张三有智商---> 属性[名字]
张三能打招呼 --->功能/方法[动词]


车也是一个对象
车能撞人 ---> 功能/方法[动词]
*/


class Man {
    public $iq = 100;

    public function say() {
        $arr = array('早上好','晚上好','尼妹呀');

        if($this->iq >= 100) {
            echo $arr[0];
        } else {
            $i = rand(0,2);
            echo $arr[$i];
        }
    }
}



class Car {
    public function hit($people) {
        $newiq = rand(50,110);        
        $people->iq = $newiq;
    }
}


$lisi = new Man();
$QQ = new Car();


$lisi->say(); 
echo '<br />';


// 撞击
$QQ->hit($lisi);

echo $lisi->iq,'<br />';
$lisi->say(); 
echo '<br />';
$lisi->say(); 
echo '<br />';
$lisi->say(); 
echo '<br />';

/****

这一道题的目的---是让大家换个思维,换个面向对象的思维来看待问题.

至此里面的语法,你不懂,没关系.

****/


?>