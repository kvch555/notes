<?php
//类的自动加载
class Aotu{

	public static function auto($cl){
		include $cl.'.php';
	}

}

spl_autoload_register("Aotu::auto");
	
?>