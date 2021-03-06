<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/****
构造方法的继承

答: 构造方法也是可以继承的,
而且继承的原则和普通方法一样.

进而,如果子类也声明构造函数,则父类的构造函数,被覆盖了!
如果父类构造函数被覆盖了,自然,只执行子类中新的构造函数.


引发一个问题:
如果是一个数据库操作类,或者model类
我们肯定是要继承过去再使用,不能直接操作model类.
而model类的构造函数,又做了许多初始化工作.

我重写的model类的构造函数之后,导致初始化工作完不成了,怎么办?
答:  如果子类继承时,子类有构造函数,保险一点,调用 parent::__construct


这一点和java的面向对象,也有不同.
在java中,实例化子类时, 父类的构造函数运行,且先运行
然后运行子类的构造函数


另外: java中构造函数不是 __construct(),而是和类名相同的方法理解为构造函数.

在一些比较教材或者,老的代码中,你也有可能这种情况.
即 与类名相同的函数做构造函数----这是PHP4时代的残留.

请记住,你不要这样写

****/


class Human {
    public function __construct(){
        echo '呱呱坠地!<br />';
    }
}



class Stu extends Human {
}


$ming = new Stu(); // 呱呱坠地,这说明构造函数也是可以继承的


class King extends Human {
    public function __construct() {
        echo '红光满屋,终日不散<br />';
    }
}



$zhu = new King();



echo '<hr />';
class Mysql {
    protected $conn = NULL;
    public function __construct() {
        $this->conn = mysql_connect('localhost','root','111111');
    }

    public function query($sql) {
        return mysql_query($sql,$this->conn);
    }
}

/*
$mysql = new Mysql();
var_dump($mysql->query('use test')); // true,query成功
*/

class MyDb extends Mysql{
    public function __construct() {
        // 如果子类继承时,有构造函数,保险一点
        parent::__construct();

        // 然后再写自己的业务逻辑
    }

    public function autoInsert() {
        return $this->query('use test');
    }
}


$mydb = new MyDb();  // 看看问题出在哪儿?
var_dump($mydb->autoInsert());



