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


/*
刚才 我们用TP做了一个用户注册,注册时的代码在下面

按我们以前的做法,
把POST来的数据,拼接sql,然后查询.


但是在TP中的做法,有点奇怪,
他是把收到的信息,
赋给了一个对象的属性.

然后对象->add()方法,就写入到数据库了.
很方便 .


思考:
1: userModel就有username属性供你去赋值吗?
2: 如果$userModel->xxx属性,是保护的,
而我的表,又有一个字段,恰好也叫xxx,
那么 我自然是 $user->xxx = $_POST['xxx'];
这不就出错了吗?


3:还有一个问题: userModel 有一些属性,很正常,比如有5个属性
a,b,c,d,e
我在注册时, 又动态设置了属性, f,g,h,i
疑问: 在拼接sql时,要把a,b,c,d,e忽略掉才行.
又怎么忽略.


答:用魔术方法来解决


通过__set()方法,
把属性的设置--->都放到数组里.
处理时,专门处理这个数组就可以了.
这样,就不会和其他属性相冲突
*/


/*
TP中的一段用户注册代码
        $userModel->username = $_POST['username'];
        $userModel->email = $_POST['email'];


        if($num = $userModel->table('user')->add()) {
            echo '注册成功';
        } else {
            echo 'fail';
        }
*/



class UserModel {
    protected $email = 'user@163.com';
    protected $data = array();

    public function __set($k,$v) {
        // $this->$k = $v; //并没有真正赋成自己的属性
        $this->data[$k] = $v; // 而是放在一个数组里
    }

    public function __get($p) {
        return isset($this->data[$p]) ? $this->data[$p] : NULL;
    }


    public function __unset($p) {
        unset($this->data[$p]);
    }

    public function __isset($p) {
        return isset($this->data[$p]);
    }

    public function add() {
        $sql = 'insert into table (';
        $sql .= implode(',',array_keys($this->data));
        $sql .= ') values (\'';
        $sql .= implode("','",array_values($this->data));
        $sql .="')";
        return $sql;
    }
}


echo '<pre>';

$userModel = new UserModel();
print_r($userModel);


$userModel->username = 'lisi';
$userModel->email = 'lisi@126.com';
print_r($userModel);


//echo $userModel->add();

unset($userModel->email);
print_r($userModel);
