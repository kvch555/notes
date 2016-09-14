<?php
//单例模式

/*
//第一步普通类
class sigle{



}

$s1=new sigle();
$s2=new sigle();

//注意，2个对象是1个的时候，才全等
if($s1===$s2){
	echo '是一个对象';
}else{
	echo '不是一个对象';
}*/


/*
//第2步 封锁new操作
class sigle{
	protected function __construct(){

	}
}

$s1=new sigle();
*/

/*
//第3步，留个接口来new对象
class sigle{
	public static function getIns(){
		return new self();
	}

	protected function __construct(){

	}
}

$s1=sigle::getIns();
$s2=sigle::getIns();

if($s1===$s2){
	echo '是一个对象';
}else{
	echo '不是一个对象';
}*/


/*//第4步，getIns先判断实例
class sigle{
	protected static $ins=null;

	public static function getIns(){
		if(self::$ins===null){
			self::$ins=new self();
		}
		return self::$ins;
	}

	protected function __construct(){

	}
}

$s1=sigle::getIns();
$s2=sigle::getIns();

if($s1===$s2){
	echo '是一个对象';
}else{
	echo '不是一个对象';
}


class multi extends sigle{
	public function __construct(){

	}
}

echo '<br/>';
$s1=new multi();
$s2=new multi();

if($s1===$s2){
	echo '是一个对象';
}else{
	echo '不是一个对象';
}*/

/*
//第5步，用final,防止继承时，被修改权限
class sigle{
	protected static $ins=null;

	public static function getIns(){
		if(self::$ins===null){
			self::$ins=new self();
		}
		return self::$ins;
	}

	//方法前加final，则方法不能被覆盖，类加final,则类不能被继承
	final protected function __construct(){

	}
}

$s1=sigle::getIns();
$s2=clone $s1;  //被克隆了，有产生了多个对象
if($s1===$s2){
	echo '是一个对象';
}else{
	echo '不是一个对象';
}*/


//第6步，禁止clone
class sigle{
	protected static $ins=null;

	public static function getIns(){
		if(self::$ins===null){
			self::$ins=new self();
		}
		return self::$ins;
	}

	//方法前加final，则方法不能被覆盖，类加final,则类不能被继承
	final protected function __construct(){

	}

	//封锁clone
	final protected function __clone(){

	}
}
$s1=sigle::getIns();
$s2=clone $s1;  
?>