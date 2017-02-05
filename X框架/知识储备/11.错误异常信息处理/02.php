<?php
//捕获异常函数
function ex($ce){
  	var_dump($ce);
}

//定义捕获异常函数
set_exception_handler('ex');

throw new Exception('aaa',5000);

?>