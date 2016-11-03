<?php
// 迷你模板类

/*
模板类的第1步:
把标签解析PHP输出语句
模板文件-->PHP文件


为了目录清晰,我们把模板和编译后的结果,放在不同的目录里.
用2个属性来记录这2个目录
*/

class mini{
	public $template_dir='';  //模板文件所在的位置
	public $compile_dir='';	  //模板编译后存放的位置

	 // 定义一个数组,用来接收外部的变量
	public $_tpl_var=array();

	public function assign($key,$value){
		$this->_tpl_var[$key]=$value;
	}

	 /*
        String $template 模板名
        作用:调用compile来编译模板,并自动引入
    */
	public function display($template){
		$comp=$this->compile($template);
		include($comp);
	}

	 /*
        string $template 模板文件名
        return  String 
    
        流程:把指定的模板内容读过来,再编译成PHP
    */
	public function compile($template){

		//读出模板内容
		$temp=$this->template_dir.'/'.$template;
		$source=file_get_contents($temp);
		//echo $source;

		$comp=$this->compile_dir.'/'.$template.'php';

		// 判断模板是否已经存在
		if(file_exists($comp)&&filemtime($temp)<filemtime($comp)){
			return $comp;
		}

		//替换模板内容
		$source=str_replace('{$','<?php echo $this->_tpl_var[\'', $source);
		$source=str_replace('}','\'];?>', $source);

		//echo $source;
		//再把编译后的内容保存成.php文件
		file_put_contents($comp,$source);

		return $comp;
	}

}

?>