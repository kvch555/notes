<?php
//装饰器模式 decorator
class article{

	protected $content;

	public function __construct($content){
		$this->content=$content;
	}

	public function decorator(){
		return $this->content;
	}

}

$art=new article('好好学习');
echo $art->decorator();


//文章需要 小编加摘要

class BianArticle extends article{
	public function summary(){
		return $this->content.'小编加了摘要';
	}

}

$art=new BianArticle('好好学习');
echo $art->summary();

//又请了SEO，SEO人员，要对文章做description处理
class SEOArticle extends BianArticle{
	public function seo(){
		//...
	}
}

//又有了广告部
class ADArticle extends SEOArticle{
	//层次越来越深，目的是-----给文章加各种内容
}
?>