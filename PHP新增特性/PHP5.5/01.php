<?php 
//php5.5新特性

//empty()可以判断表达式
function t(){
	return false;
}
var_dump(empty(t()));

//yield 生成器

//旧方法得到循环结果，先定义数组，然后循环获得
function getAll(){
	return ['a','b','c','d','e'];
}

foreach (getAll() as $k => $v) {
	echo $v.'<br/>';
}

//新方法得到循环结果，造一个数，循环一个数

function getAllOne(){
	for($i=1;$i<6;$i++){
		yield $i;
	}
}

foreach (getAllOne() as $k => $v) {
	echo $v.'<br/>';
}

?>