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

//客户端，看不到dbmysql,dbsqlite的内部细节的
//只知道，上两个类实现了db接口
$db=new dbmysql();
$db->conn();

$db=new dbsqlite();
$db->conn();

?>