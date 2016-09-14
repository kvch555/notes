<?php
//共同接口
interface db{
	function conn();
}

interface Factory{
	function createDB();
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

class mysqlFactory implements Factory{
	public function createDB(){
		return new dbmysql();
	}

}

class sqliteFactory implements Factory{
	public function createDB(){
		return new dbsqlite();
	}
}

//服务器端添加oracle类
//前面的代码不用改
class dboracle implements db{
	public function conn(){
		echo '连接上了oracle';
	}
}

class oracleFactory implements Factory{
	public function createDB(){
		return new dboracle();
	}

}

//从客户端开始
$fact=new mysqlFactory();
$db=$fact->createDB();
$db->conn();

$fact=new sqliteFactory();
$db=$fact->createDB();
$db->conn();

$fact=new oracleFactory();
$db=$fact->createDB();
$db->conn();

?>