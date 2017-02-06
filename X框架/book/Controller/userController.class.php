<?php
class userController extends Controller{
	public function add(){
		$obj=new UserModel();
		echo $obj->add(1,2);
	}
}

?>