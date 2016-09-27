<?php
//面向过程来解决举报问题

$lev=$_POST['jubao']+0;

class board{
	public function process(){
		echo '版主删帖';
	}

}

class admin{
	public function process(){
		echo '管理员封账号';
	}
}

class police{
	public function process(){
		echo '抓起来';
	}
}

//面向过程来解决举报问题
if($lev==1){
	$judge=new board();
	$judge->process();
}else if($lev==2){
	$judge=new admin();
	$judge->process();
}else{
	$judge=new police();
	$judge->process();
}

?>