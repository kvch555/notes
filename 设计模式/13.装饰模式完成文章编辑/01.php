<?php
//装饰模式做文章修饰功能
class BaseArt{
	protected $content;
	protected $art = null;	

	public function __construct($content){
		$this->content=$content;
	}

	public function decorator(){
		return $this->content;
	}
}

//编辑文章摘要
class BianArt extends BaseArt{
	public function __construct(BaseArt $art){
		$this->art=$art;
		$this->decorator();
	}

	public function decorator(){
		return $this->content=$this->art->decorator().'小编摘要';
	}
}

//SEO关键词
class SEOArt extends BaseArt{
	public function __construct(BaseArt $art){
		$this->art=$art;
		$this->decorator();
	}

	public function decorator(){
		return $this->content=$this->art->decorator().'SEO关键词';
	}
}

//$b=new SEOArt(new BianArt(new BaseArt('天天向上')));
$b=new BianArt(new SEOArt(new BaseArt('天天向上')));
echo $b->decorator();
?>