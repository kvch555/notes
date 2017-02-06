<?php
//定义绝度路径
define('X_PATH',__DIR__.'/');
class X{
	private static $map=[
		'Controller'=>X_PATH.'lib/Controller.php',
		'Model'=>X_PATH.'lib/Model.php',
	];

	//自定义自动加载
	public static function auto($classname){
		//判断加载基类
		if(isset(self::$map[$classname])){
			include(self::$map[$classname]);
		}
		//判断加载控制器
		else if(substr($classname, -10)=='Controller'){
			include(APP_PATH.'Controller/'.$classname.'.class.php');
		}
		//判断加载模型
		else if(substr($classname,-5)=='Model'){
			include(APP_PATH.'Model/'.$classname.'.class.php');
		}
	}

}

//仿thinkphp路由两中形式
//第一种形式
$c=isset($_GET['c'])?$_GET['c']:'';
$a=isset($_GET['a'])?$_GET['a']:'';

if(empty($c)&&empty($a)){
	//第二种形式
	$p=isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'';
	if(!empty($p)){
		$p=trim($p,'/');
		list($c,$a)=explode('/',$p);
	}
}

if(empty($c)||empty($a)){
	$c='index';
	$a='index';
}

spl_autoload_register("X::auto");

$c.='Controller';

$controller=new $c;
$controller->$a();
?>