<?php
setcookie('username','admin');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<script type="text/javascript">

xhr = new XMLHttpRequest();


function comet(msg) {
    //alert(msg);
    var cont = '';
    cont += '<a onclick="reply(\''+ msg.pos +'\')">' + msg.pos + '</a>' + '对你说<br />';
    cont += msg.content + '<br />';

    //alert(cont);
    console.log(msg);
    document.getElementById('msgzone').innerHTML += cont;
}

function reply(pos) {
    //alert(pos);
    document.getElementById('rec').innerHTML = pos;
}


function huifu() {
    var rec = document.getElementById('rec').innerHTML;
    var cont = document.getElementsByTagName('textarea')[0].value;

    if(rec=='' || cont== '') {
        alert('请选择回复人并填内容');
        return;
    }
    
    xhr.open('POST','sendmsg.php',true);
    xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if(this.readyState==4) {
            if(this.responseText == 'ok') {
                var rep = '';
                rep +=  '你对' +  rec + '说<br />';
                rep += cont + '<br />';
                document.getElementById('msgzone').innerHTML += rep;
                document.getElementsByTagName('textarea')[0].value = '';

            }
        }
    }

    xhr.send('rec='+rec+'&content='+cont);
    
}


</script>

<style type="text/css">
#msgzone {
border: solid 1px gray;
width:500px;
height:300px;
overflow:scroll;
}
</style>
</head>
    <body>
        <h1>comet反向ajax技术--在线客服系统--之客服端</h1>
        <h2>特点:界面粗糙,技术不糙</h2>
        <h3>原理: iframe+长连接,获取实时内容,并更新到父页面</h3>

        <div id="msgzone">
            
        </div>

        回复:<span id="rec"></span>
        <p>
        <textarea></textarea>
        </p>
        <p>
        <input type="button" value="回复" onclick="huifu();" />
        </p>
        <iframe src="cometbyiframe.php" width="0" height="0" frameBorder="0"></iframe>
    </body>
</html>