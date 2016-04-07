<?
/***
====笔记部分====
__call 
__callStatic
***/

/*
class Human {
    public function hello() {
        echo 'hello<br />';
    }
}

$lisi = new Human();

$lisi->hello();
$lisi->say();
// Fatal error: Call to undefined method Human::say()
*/



class Human {
    public function hello() {
        echo 'hello<br />';
    }

    private function t() {
    }

    public static function __callStatic($method,$argu) {
        echo '你想调用一个不存在或不权调用的静态方法',$method,'<br />';
        echo '你调用时还传了参数<br />';
        print_r($argu);
    }

    public function __call($method,$argu) {
        echo '你想调用一个我不存在或不权调用的方法',$method,'<br />';
        echo '你调用时还传了参数<br />';
        print_r($argu);
    }
 
}

$lisi = new Human();

$lisi->hello();
$lisi->say(1,2,3);

$lisi->t('a','b','c');

/*
__call是调用不可见(不存在或无权限)的方法时,自动调用
$lisi->say(1,2,3);-----没有say()方法----> __call('say',array(1,2,3))运行

*/



Human::cry('痛哭','号哭','鬼哭');
/*
__callStatic 是调用不可见的静态方法时,自动调用.
Human::cry('a','b','c')----没有cry方法---> Human::__callStatic('cry',array('a','b','c'));
*/



/*
这个__callStatic 为什么和其他系统函数颜色不太一样呢?

答:
这个方法 是PHP5.3里才添加的,比较新.
可能老版本的ediptlus的语法文件里,没有他
*/
?>