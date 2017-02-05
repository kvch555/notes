<?php
error_reporting(0);
class App{
	public function __construct(){
		$this->iserr(); 
	}

	//类里面自定义捕获错误或异常，需要数组形式传参数，[$this,'ex']意思是定义本类里面ex函数为捕获错误函数
	public function iserr(){
		set_exception_handler([$this,'ex']);
		set_error_handler([$this,'err']);
	}

	//捕获异常函数
	public function ex($ex){
		$type=$ex->getCode();
		$msg=$ex->getMessage();
		$file=$ex->getFile();
		$line=$ex->getLine();
		$this->errlog($type,$msg,$file,$line);
		//echo "{$type}{$msg}{$file}{$line}";
	}

	//捕获错误函数
	public function err($type,$msg,$file,$line){
		//echo "{$type}{$msg}{$file}{$line}";
		$this->errlog($type,$msg,$file,$line);
	}

	//错误信息收集并统一处理
	public function errlog($type,$msg,$file,$line){
		$errstr=date('Y-m-d H:i:s')."\r\n";
		$errstr.="错误级别：{$type}\r\n";
		$errstr.="错误信息：{$msg}\r\n";
		$errstr.="错误文件：{$file}\r\n";
		$errstr.="错误行号：{$line}\r\n";
		$errstr.="\r\n";

		error_log($errstr,3,__DIR__.'./error.log');
	}

}

$app=new App();

echo $a;
//throw new Exception('fsdj',200);


?>