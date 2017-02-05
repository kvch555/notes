<?php
//捕获错误
function err($errno,$errstr,$errfile,$line){
	echo $line;
}

//定义捕获错误函数，有错误触发err函数
set_error_handler('err');

echo $a;



?>