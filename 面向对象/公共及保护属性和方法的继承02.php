<?php
/***
====笔记部分====

继承时的权限变化

继承自父类的属性/方法
权限只能越来越宽松或不变,不能越来越严格.
***/


/****
代码部分
****/


class Human {
    public function cry() {
        echo '555<br />';
    }
}


class Stu extends Human{
    protected function cry() {
        echo '5959<br />';
    }
}


/*

Fatal error: Access level to Stu::cry() must be public (as in class Human) in D:\www\1108\06.php on line 36

子类的cry比父类的cry方法,权限要严格.
这不行,继承时,权限只能越来越宽松或不变,不能越来越严格.

*/
?>