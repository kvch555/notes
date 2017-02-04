<?php
//php7.0新特性

//旧写法
$page=isset($_GET['page'])?$_GET['page']:1;

//新写法
$page=$_GET['page'] ?? 1;

echo $page;

//新版写法限制参数和返回参数是整型
function add(int $x,int $y):int{
	return $x+$y;
}

//旧版写法，没有限制
function add2($x,$y){
	return $x+$y;
}

echo add(3,4),'<br/>';

echo add(3,4,5),'<br/>';

echo add2(3,4,5),'<br/>';

//新版匿名类
echo (new class{
	public $leg=4;
})->leg,'<br/>';
?>