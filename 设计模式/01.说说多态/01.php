<?php
abstract class Tiger{
	public abstract function climb();
}


class XTiger extends Tiger{
	public function climb(){
		echo '摔下来';
	}
}

class MTiger extends Tiger{
	public function climb(){
		echo '爬到树顶';
	}
}

class Cat{
	public function climb(){
		echo '飞到天上去';
	}
}

class Client{
	public static function call(Tiger $animal){
		$animal->climb();
	}
}

Client::call(new XTiger());
Client::call(new MTiger());
Client::call(new Cat());


?>