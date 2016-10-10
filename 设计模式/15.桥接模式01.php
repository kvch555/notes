<?php
//桥接模式 bridge
//论坛给用户发信息,可以是站内短信，email,手机
interface msg{
	public function send($to,$content);
}

class zn implements msg{
	public function send($to,$content){
		echo "站内信给{$to},内容：{$content}";
	}
}

class email implements msg{
	public function send($to,$content){
		echo "email给{$to},内容：{$content}";
	}
}

class sms implements msg{
	public function send($to,$content){
		echo "短信给{$to},内容：{$content}";
	}
}

//内容也分普通，加急，特急
/*class zncommon extends msg
class znwarn extends msg
class zndanger extends msg

class emailcommon extends email
class emailwarn extends email
class emaildanger extends msg
...
...*/

/*思考：
信的发送方式是一个变化因素，
信的紧急程度是一个变化因素，
为了不修改父类，只好考虑2个因素的组合，不停产生新类...*/



?>