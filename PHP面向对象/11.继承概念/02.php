<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
继承
语法: extends 

子类 extends 父类 {
}

注意点: 子类 只能继承自 一个父类

不能这样写:
subClass extends  Dog,Cat,Pig {
}


***/


/****
代码部分
****/


class Human {
    private $height = 160;

    public function cry() {
        echo '5555<br />';
    }
}



// 再声明一个学生类,学生本质上还是人
// 只不过是人类中,稍微特殊一点的一个群体.
// 即:人类的基础上,衍生出学生类.
// 可以让学生类 继承自 人类
class Stu extends Human{
}

$zhoukou = new Human();
$zhoukou->cry();

/**/
$lily = new Stu();
$lily->cry();
$lily->laugh();


/*
思考:
在学生类中
cry 与 laugh方法 都没定义
为什么cry方法调用成功
laugh方法调用失败!

答:因为Stu类 继承自 Human类

现实中,继承的例子更多.
你同事高帅富,某天开了个宝马.
他没有宝马,但是他爹有宝马.
*/


