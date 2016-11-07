<?php
//PHP实现观察者
//PHP5中提供观察者observer与被观察者subject的接口

class user implements splSubject{
	public $lognum;
	public $hobby;

	protected $observers = null;

	public function __construct($hobby){
		$this->lognum =rand(1,10);
		$this->hobby=$hobby;
		$this->observers=new SplObjectStorage();
	}

	public function login(){
		//操作seesion
		$this->notify();
	}

	public function attach(SPLObserver $observer){
		$this->observers->attach($observer);
	}

	public function detach(SPLObserver $observer){
		$this->observers->detach($observer);
	}

	public function notify(){
		$this->observers->rewind();
		while($this->observers->valid()){
			$observer=$this->observers->current();
			$observer->update($this);
			$this->observers->next();
		}
	}
}


class secrity implements SPLObserver{
	public function update(SplSubject $subject){
		if($subject->lognum>=3){
			echo "这是第{$subject->lognum}次安全登录";
		}else{
			echo "这是第{$subject->lognum}次登录异常";
		}
	}

}

class ad implements SPLObserver{
	public function update(SplSubject $subject){
		if($subject->hobby=='sport'){
			echo '台球英锦赛门票预订';
		}else{
			echo '好好学习天天向上';
		}
	}
}


//实施观察
$user = new user('sport');
$user->attach(new secrity());
$user->attach(new ad());

$user->login();

?>