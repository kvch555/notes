![](./image/foXieYi.png)  
  
提示方法有哪些？  
GET,POST,HEAD,PUT,TRACE,DELETE,OPTIONS...
  

HEAD：和GET基本一致，只是不返回内容。  
比如我们只是确认一个内容（比如照片）还正常存在，不需要返回照片内容，这时用HEAD比较合适。

TRACE:是你用了代理上网，比如用代理访问new.163.com,你想看看代理有没有修改你的HTTP请求，可以用TRACE来测试一下，163.com的服务器就会把最后收到的请求返回给你。
  
OPTIONS：是返回服务器可用的请求方法。

![](./image/fifXieYi.png)  
  
注意：这些请求方法虽然HTTP协议里规定的，但WEB SERVER未必允许或支持这些方法。