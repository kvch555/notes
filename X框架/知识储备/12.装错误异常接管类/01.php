<?php
class App{
	public function __construct(){
		$this->iserr(); 
	}

	//类里面定义捕获错误或异常，需要数组形式传参数，[$this,'ex']意思是定义本类里面ex函数为捕获错误函数
	public function iserr(){
		set_exception_handler([$this,'ex']);
		set_error_handler([$this,'err']);
	}

	public function ex(){
		echo 'exception';
	}

	public function err(){
		echo 'error'; 
	}

}

$app=new App();

//echo $a;
throw new Exception('fsdj');


?>