<?php
//捕获异常函数
function ex(){
  	echo 'ex';
}

//定义捕获异常函数
set_exception_handler('ex');

throw new Exception('aaa');

?>