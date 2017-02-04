<?php
//PHP5.3新特性 

//增加?:这个写法
//旧写法
$page=3;
$page=$page?$page:1;

echo $page.'<br/>';

//新写法
$page=3;
$page=$page?:1;

echo $page.'<br/>';

//增加匿名函数写法
$x=function(){
	echo 'xxxx<br/>';
};

$x();

//$arr数组里面的元素都加1 
$arr=array(1,3,5,7);

function incr($arr){
	foreach($arr as $k=>$v){
		$arr[$k]=$v+1;
	}
	return $arr;
}

print_r(incr($arr));

//用匿名函数实现
function incr2($arr,$callback){
	foreach($arr as $k=>$v){
		$arr[$k]=$callback($v);
	}
	return $arr;
}

$rs=incr2($arr,function($v){return $v+1;});
print_r($rs);

$rs=incr2($arr,function($v){return $v+2;});
print_r($rs);

$rs=incr2($arr,function($v){return $v*2;});
print_r($rs);


?>