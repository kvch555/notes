<?php
interface Math{
	public function calc($op1,$op2);
}

class MathAdd implements Math{
	public function calc($op1,$op2){
		return $op1+$op2;
	}
}

class MathSub implements Math{
	public function calc($op1,$op2){
		return $op1-$op2;
	}
}

class MathMul implements Math{
	public function calc($op1,$op2){
		return $op1*$op2;
	}
}

class Mathdiv implements Math{
	public function calc($op1,$op2){
		return $op1/$op2;
	}
}

/*传来OP，根据OP，制造不同对象，并且调用
if($_POST)*/

//封装1个虚拟计算机
class CMath{
	protected $calc = null;

	public function __construct($type){
		$calc = 'Math'.$type;
		$this->calc = new $calc();
	}

	public function calc($op1,$op2){
		return $this->calc->calc($op1,$op2);
	}
}

$type=$_POST['op'];
$cmath=new CMath($type);
echo $cmath->calc($_POST['op1'],$_POST['op2']);
?>