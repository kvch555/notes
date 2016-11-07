<?php
//共同接口
interface db{
	function conn();
}

//服务端开发(不知道将会被谁调用)
class dbmysql implements db{
	public function conn(){
		echo '连上了Mysql';
	}
}


class dbsqlite implements db{
	public function conn(){
		echo '连接上了sqlite';
	}
}

class Factory{
	public static function createDb($type){
		if($type=='mysql'){
			return new dbmysql();
		}elseif($type=='sqlite'){
			return new dbsqlite();
		}else{
			throw new Exception('Error db type',9);
		}
	}
}

//客户端 现在不知道服务端到底有哪些类名了
//只知道对方开放了一个Factory::createDB方法
//方法只允许传递数据库名称

$mysql=Factory::createDB('mysql');
$mysql->conn();

$mysql=Factory::createDB('sqlite');
$mysql->conn();

//如果新增oracle类型，怎么办?
//服务端要修改Factory的内容(在java,c++中,改后还得再编译)
//在面向对象设计法则中，重要的开闭原则   对于修改是封闭，对于扩展是开放的。
?>