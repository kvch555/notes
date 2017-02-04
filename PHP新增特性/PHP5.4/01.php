<?php
//PHP5.4新特性

//数组旧写法
$arr=array('a','b','c');
$arr=array('id'=>3,'age'=>4);

//数组新写法
$arr=['a','b','c'];
print_r($arr);
$arr=['id'=>3,'age'=>4];
print_r($arr);
 
function getAll(){
	return ['a','b','c','d'];
}

//数组旧调用方法
$rs=getAll();
echo $rs[3];

//数组新调用方法
echo getAll()[3];

class Dog{
	public function bark(){
		echo 'wangwang';
	}
}

//调用对象旧写法
$d=new Dog();
$d->bark();

//调用对象新写法
(new Dog)->bark();

?>
<?php
$title='艳阳天';
$content='好好好';
//新模板输出变量方法
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<h1><?=$title?></h1>
	<p><?=$content?></p>
</body>
</html>

<?php 
//可以写二进制
echo 0b11111111;

?>

<?php
//traits 萃取 被一个类同时继承
trait cat{
	public function bark(){
		echo 'bark';
	}
}

trait bird{
	public function fly(){
		echo 'fly';
	}
}

class Super{
	use cat,bird;
}
(new Super())->bark();
(new Super())->fly();
?>