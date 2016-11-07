<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
异常

***/


Error_reporting(0);

class mysql {
    protected $conn = NULL;

    public function __construct() {
        $this->conn = mysql_connect('localhost','root','1111111');

        if(!$this->conn) {
            // 发卫星报告

            // 在PHP中,卫星是规定的一种对象.
            // 哪个类的对象: Exception类的对象
            // new Exception('错误原因',错误代码);
            $e = new Exception('漏油了',9);

            throw $e;  // throw 抛出/扔出
        }
    }
}


try { // 测试,并试图捕捉错误信息
    $mysql = new mysql(); // 返回mysql对象,并且自动连上了数据库
} catch(Exception $e) {
    echo '捕捉到错误信息:<br />';
    echo $e->getMessage(),'<br />';
    echo '错误代码',$e->getCode(),'<br />';
    echo '错误文件',$e->getFile(),'<br />';
    echo '错误行',$e->getLine(),'<br />';
}

/*
疑问:我怎么判断连接成功了没有?
答:返回对象后, 打印对象的 $conn属性,来判断

需要2个步骤
1: new mysql
2: if($mysql->conn) {
}

思考:我们以前用函数时,都是返回一个值,用值来判断各种情况
比如 返回true/false 代码成功/失败

现在我们用返回值 还行不行?
*/


var_dump($mysql);

if($mysql instanceof mysql) {
    echo '对象创建成功,大概连接成功';
} else {
    echo '对象创建失败,大概连接失败';
}


