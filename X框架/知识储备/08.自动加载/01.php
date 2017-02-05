<?php
//定义自动加载函数
function auto($classname){
	//echo $classname;
	include $classname.'php';
}
spl_autoload_register('auto');

$c=new s();
?>