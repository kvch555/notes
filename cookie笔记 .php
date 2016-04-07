
setcookie可以用2个参数,3个参数，4个参数，5个参数来设置

1.1
2个参数设置COOKIES
$_COOKIE随着关闭浏览器就失效了 

例子:
setcookie.php
setcookie ("age",'20');

readcookie.php
print_r($_COOKIE);

1.2
让COOKIE多活一会儿
3个参数设置COOKIES，第3个参数指的就是cookie的生命周期，以时间戳为单位，时间戳以秒为单位

例子：
setcookie.php
setcookie('aa','222',time()+15); //15秒后自动消失，$_COOKIE关闭浏览器也不会失效
echo 'success';

readcookie.php
print_r($_COOKIE);


例子：
setcookie.php
setcookie('aa','222',time()+3600); //1小时后自动消失，$_COOKIE关闭浏览器也不会失效
echo 'success';

readcookie.php
print_r($_COOKIE);


1.3
cookie的作用域
一个页面设置的cookie
默认在其同级目录下，及子目录下可以读取
如果想让cookie整站有效，可以根目录下setcookie
也可以用第4个参数，来指定cookie生效路径

例子：
test/setcookie.php
setcookie('gobal','全局有效',time()+3600,'/');   //跨目录也不会失效
echo 'success';

test/readcookie.php
print_r($_COOKIE);

test/readcookie.php
print_r($_COOKIE);    

1.4
cookie是不能跨域名(否则安全问题就太大了!)
比如sohu.com的cookie,不能被发到sina.com用

但是，可以在一个域名的子域名下使用
需要用到第5个参数，来表示

例子:
setcookie('gobal','全局有效',time()+3600,'/','sina.com.cn');  //这个cookie子域名可以使用

1.5
销毁cookie

例子:
setcookie('gobal','',0);   //销毁cookie,时间设置为0，1970失效。

