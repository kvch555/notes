<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
面向对象的一个观点:
做的越多,越容易犯错

抽象类{就定义类模板}--具体子类实现{china,japan,english}

接口:



***/


// 抽象的数据库类
/*
创业做网站
到底用什么数据库?  mysql, oracle,sqlserver,postgresql?
这样:先开发网站,运行再说.
先弄个mysql开发着,正式上线了再数据库也不迟

引来问题:
换数据库,会不会以前的代码又得重写?

答:不必,用抽象类
开发者,开发时,就以db抽象类来开发.
*/
abstract class db {
    public abstract function connect($h,$u,$p);

    public abstract function query($sql);

    public abstract function close();
}

/* 
// 下面这个代码有误
// 因为子类实现时, connect和抽象类的connect参数不一致
class mysql extends db {
    public function connect($h,$h) {
        return true;
    }

    public function query($sql,$conn) {
    }

    public function close() {
    }
}
*/



/*
下面这个mysql类,严格实现了db抽象类
试想: 不管上线时,真正用什么数据库

我只需要再写一份如下类
class oracle extends db {
}

class mssql extends db {
}

class postsql extends db {
}

业务逻辑层不用改?

为什么不用改?
因为都实现的db抽象类.



我开发时,调用方法不清楚的地方,我就可以参考db抽象类.
反正子类都是严格实现的抽象类.
*/
class mysql extends db {
    public function connect($h,$h,$u) {
        return true;
    }

    public function query($sql) {
    }

    public function close() {
    }
}




/*

接口 就更加抽象了

比如一个社交网站,

关于用户的处理是核心应用.

登陆
退出
写信
看信
招呼
更换心情
吃饭
骂人
捣乱
示爱
撩骚

这么多的方法,都是用户的方法,
自然可以写一个user类,全包装起来

但是,分析用户一次性使不了这么方法

用户信息类:{登陆,写信,看信,招呼,更换心情,退出}

用户娱乐类:{登陆,骂人,捣乱,示爱,撩骚,退出}


开发网站前,分析出来这么多方法,
但是,不能都装在一个类里,
分成了2个类,甚至更多.

作用应用逻辑的开发,这么多的类,这么多的方法,都晕了.

*/

interface UserBase {
    public function login($u,$p);

    public function logout();
}

interface UserMsg {
    public function wirteMsg($to,$title,$content);
    public function readMsg($from,$title);
}

interface UserFun {
    public function spit($to);
    public function showLove($to);
}



/*
作为调用者, 我不需要了解你的用户信息类,用户娱乐类,
我就可以知道如何调用这两个类

因为: 这两个类 都要实现 上述接口.
通过这个接口,就可以规范开发.

*/


/*
下面这个类,和接口声明的参数不一样,就报错,
这样,接口强制统一了类的功能
不管你有几个类,一个类中有几个方法

我只知道,方法都是实现的接口的方法.
*/
class User implements UserBase {
    public function login($u) {
    }
}



