<?php
//php 5.6新特性

//const定义常量可以写在类外,常量还可以定义为数组
const arr=['x','y','z'];
echo arr[1].'<br/>';

//旧方法实现不定参数
function add($a,$b){
	$param=func_get_args();
	print_r($param);
	return $a+$b;
}
add(1,2,3,4,5,6);

//新方法实现不定参数
function addOne($a,$b,...$c){
	print_r($c);
}
addOne(1,2,3,4,5,6);

//新方法实现传不定参数
function test($a,$b,$c,$d){
	echo $a.$b.$c.$d.'<br/>';
}
$num=[2,3,4];
test(1,...$num);

//新方法实现一个数的n次方
echo 2**3,'<br/>';
echo 2**4,'<br/>';
?>