<?php
/****
自学it网 高端PHP培训

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
****/



/*
PHP+socket编程　发送HTTP请求

要求能　模拟下载，注册，登陆,批量发帖
*/


// http请求类的接口
interface Proto {
    // 连接url
    function conn($url);

    //发送get查询
    function get();

    // 发送post查询
    function post();

    // 关闭连接
    function close();
}



class Http implements Proto {

    const CRLF  = "\r\n";

    protected $errno = -1;
    protected $errstr = '';
    protected $response = '';

    protected $url = null;
    protected $version = 'HTTP/1.1';
    protected $fh = null;
    
    protected $line = array();
    protected $header = array();
    protected $body = array();

    
    public function __construct($url) {
        $this->conn($url);
        $this->setHeader('Host: ' . $this->url['host']);
    }

    // 此方法负责写请求行
    protected function setLine($method) {
        $this->line[0] = $method . ' ' . $this->url['path'] . '?' .$this->url['query'] . ' '. $this->version;
    }

    // 此方法负责写头信息
    public function setHeader($headerline) {
        $this->header[] = $headerline; 
    }

    // 此方法负责写主体信息
    protected function setBody($body) {
         $this->body[] = http_build_query($body);
    }


    // 连接url
    public function conn($url) {
        $this->url = parse_url($url);
        //　判断端口
        if(!isset($this->url['port'])) {
            $this->url['port'] = 80;
        }

        //　判断query
        if(!isset($this->url['query'])) {
            $this->url['query'] = '';
        }

        $this->fh = fsockopen($this->url['host'],$this->url['port'],$this->errno,$this->errstr,3);
    }

    //构造get请求的数据
    public function get() {
        $this->setLine('GET');
        $this->request();
        return $this->response;
    }

    // 构造post查询的数据
    public function post($body = array()) {      
        $this->setLine('POST');

        // 设计content-type
        $this->setHeader('Content-type: application/x-www-form-urlencoded');
        
        // 设计主体信息,比GET不一样的地方
        $this->setBody($body);


        // 计算content-length
        $this->setHeader('Content-length: ' . strlen($this->body[0]));

        $this->request();

        return $this->response;
    }

    // 真正请求
    public function request() {
        // 把请求行，头信息，实体信息　放在一个数组里，便于拼接
        $req = array_merge($this->line,$this->header,array(''),$this->body,array(''));
        //print_r($req);

        $req = implode(self::CRLF,$req); 
        //echo $req; exit;

        fwrite($this->fh,$req);
        
        while(!feof($this->fh)) {
            $this->response .= fread($this->fh,1024);
        }

        $this->close(); //　关闭连接
    }


    // 关闭连接
    public function close() {
        fclose($this->fh);
    }

    

}




/*
$url = 'http://news.163.com/13/0613/09/9187CJ4C00014JB6.html';

$http = new Http($url);
echo $http->get();
*/
/*
set_time_limit(0);

$url = 'http://liangyue.net.cn/0523/?';



for($i=1;$i<100;$i++) {
    $str = str_shuffle('abcdefghijklmnopqrst0776656');
    $tit = substr($str,0,5);
    $con = substr($str,6,8);

    $http = new Http($url);
    $http->post(array('tit'=>$tit,'con'=>$con,'submit'=>'留言'));

    echo $tit,'-----------',$con,'<br />';

    usleep(2000);
}

*/