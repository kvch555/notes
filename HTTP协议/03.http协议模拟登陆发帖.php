<?php
/****
自学it网 高端PHP培训

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
****/


require('./http.class.php');


$http = new Http('http://home.verycd.com/cp.php?ac=pm&op=send&touid=0&pmid=0');


$http->setHeader('Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8');
$http->setHeader('Accept-Encoding: gzip, deflate');
$http->setHeader('Accept-Language: zh-cn,zh;q=0.8,en-us;q=0.5,en;q=0.3');
$http->setHeader('Connection: keep-alive');

$http->setHeader('Cookie: Hm_lvt_c7849bb40e146a37d411700cb7696e46=1371132935,1371551596,1371552570; CNZZDATA1479=cnzz_eid%3D2070887527-1371133011-http%253A%252F%252Fhome.verycd.com%26ntime%3D1371559611%26cnzz_a%3D27%26retime%3D1371559611556%26sin%3Dhttp%253A%252F%252Fwww.verycd.com%252Fi%252F17907141%252F%26ltime%3D1371559611556%26rtime%3D1; __utma=248211998.1671623420.1371133015.1371557486.1371559612.4; __utmz=248211998.1371552579.2.2.utmcsr=verycd.com|utmccn=(referral)|utmcmd=referral|utmcct=/; Hm_lpvt_c7849bb40e146a37d411700cb7696e46=1371554752; post_action=repost; BAIDU_CLB_REFER=http%3A%2F%2Fcwebmail.mail.163.com%2Fjs5%2Fread%2Freadhtml.jsp%3Fssid%3DI7zQECYCxLDKHPlnXYxQm9sNe5EPh1drYPvN26nZekk%253d%26mid%3D45%3A1tbiLRFAhFEFoLvtCAAAsS%26color%3D003399%26preventSetRead%3Don%26font%3D15; uchome_loginuser=http%E5%8D%8F%E8%AE%AE; uchome__refer=%2Fspace.php%3Fdo%3Dpm%26filter%3Dnewpm; __utmc=248211998; sid=9a48b201fb4d176a7188ef2a3560789651eb4766; member_id=17822047; member_name=http%E5%8D%8F%E8%AE%AE; mgroupId=93; pass_hash=e75f942862a5e927a2faffd2d2d582c9; rememberme=false; uchome_auth=4128oUJWyonkCXZvxM4sDRjcugSmt3L0r197Pq%2BPdf8fcLJsUiNZKBXjG0hYuPZSRK3XEs2FuRn1pH2cEFBNc1H0Im7x5A; uchome_sendmail=1; uchome_checkpm=1; __utmb=248211998.1.10.1371559612; dcm=1');

$http->setHeader('Referer: http://home.verycd.com/cp.php?ac=pm');
$http->setHeader('User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0');


$msg = array(
'formhash'=>'4f23e777',
'message'=>'我不是在灌水,请放行',
'pmsubmit'=>'true',
'pmsubmit_btn'=>'发送',
'refer'=>'http://home.verycd.com/space.php?do=pm&filter=privatepm',
'username'=>'http接收'
);


file_put_contents('./res.html',$http->post($msg));
echo 'ok';



