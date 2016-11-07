<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====简单MySQL类封装====

目标:
连接数据库
发送查询
对于select型 返回查询数据
关闭mysql连接
***/

/*
思路: 首先得连接,连接就得有参数.
参数如何传?
答:
1可以用配置文件,当网站大了,肯定会有配置文件
2可以通过构造函数传参

建议用1,但我们目前,仅仅是写一个简单类
*/



class Mysql {
    private $host;
    private $user;
    private $pwd;
    private $dbName;
    private $charset;

    private $conn = null; // 保存连接的资源


    public function __construct() {
        // 应该是在构造方法里,读取配置文件
        // 然后根据配置文件来设置私有属性
        // 此处还没有配置文件,就直接赋值

        $this->host = 'localhost';
        $this->user = 'root';
        $this->pwd = '111111';
        $this->dbName = 'test';

        // 连接
        $this->connect($this->host,$this->user,$this->pwd);

        // 切换库
        $this->switchDb($this->dbName);

        // 设置字符集
        $this->setChar($this->charset);
    
    
    }

    // 负责连接
    private function connect($h,$u,$p) {
        $conn = mysql_connect($h,$u,$p);
        $this->conn = $conn;
    }

    // 负责切换数据库,网站大的时候,可能用到不止一个库
    public function switchDb($db) {
        $sql = 'use ' . $db;
        $this->query($sql);
    }

    // 负责设置字符集
    public function setChar($char) {
        $sql = 'set names ' .  $char;
        $this->query($sql);
    }

    // 负责发送sql查询
    public function query($sql) {
        return mysql_query($sql,$this->conn);
    }

    // 负责获取多行多列的select 结果
    public function getAll($sql) {
        $list = array();

        $rs = $this->query($sql);
        if(!$rs) {
            return false;
        }

        while($row = mysql_fetch_assoc($rs)) {
            $list[] = $row;
        }

        return $list;

    }

    // 获取一行的select 结果
    public function getRow($sql) {
        $rs = $this->query($sql);
        
        if(!$rs) {
            return false;
        }

        return mysql_fetch_assoc($rs);
    }

    // 获取一个单个的值
    public function getOne($sql) {
        $rs = $this->query($sql);
        if(!$rs) {
            return false;
        }

        $row = mysql_fetch_row($rs);

        return $row[0];
    }

    public function close() {
        mysql_close($this->conn);
    }
}


echo '<pre>';

$mysql = new Mysql();

print_r($mysql);

/*
$sql = "insert into stu values (20,'object','99988')";

if($mysql->query($sql)) {
    echo 'query成功';
} else {
    echo '失败';
}
*/

echo '<br />';

$sql = 'select * from stu';
$arr = $mysql->getAll($sql);

print_r($arr);



// 查询16号学员
$sql = 'select * from stu where id=16';
print_r($mysql->getRow($sql));


// 查询共有多少个学生
$sql = 'select count(*) from stu';
print_r($mysql->getOne($sql));




/*
到此,一个简单的mysql封装类,完成.

改进:
insert update操作,都需要大量拼接字符串.

能否给定一个数组,数组键->列 ,数组值->列的值

然后自动生成 insert 语句!


*/



