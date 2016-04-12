<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

***/




class mysql {
    protected $conn = NULL;

    public function __construct() {
        $this->conn = @mysql_connect('localhost','root','1111111');

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


// 内部扔了异常,结果外部没有人来catch,并处理
// 这时,要报fatal error的
$mysql = new mysql();



