<?php
interface hasher{
	public function _hash($str);
}

interface distribution{
	public function lookup($key);
}

class Moder implements hasher,distribution{
	protected $_ser=[];
	protected $_num=0;

	public function _hash($str){
	  return sprintf('%u',crc32($str));
	}

	public function lookup($key){
		$index=$this->_hash($key) % $this->_num;
		return $this->_ser[$index];
	}

	public function addNode($s){
		$this->_ser[]=$s;
		$this->_num +=1;
	}

	public function delNode($s){
		foreach ($this->_ser as $k => $v) {
			if($s==$v){
				unset($this->_ser[$k]);
			}
		}

		$this->_num -=1;

		$this->_ser=array_merge($this->_ser);
	}	
}


$obj=new Moder();
$obj->addNode('a');
$obj->addNode('b');
$obj->addNode('c');
$obj->addNode('d');
$obj->addNode('e');

for($i=1;$i<=100;$i++){
	$key="key_{$i}";
	echo $key.':'.$obj->lookup($i).'<br/>';
}




?>