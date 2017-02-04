redis是什么:  
Redis is an open source, BSD licensed, advanced key-value store. It is often referred to as a data structure server since keys can contain strings, hashes, lists, sets and sorted sets.  
redis是开源,BSD许可,高级的key-value存储系统. 
可以用来存储字符串,哈希结构,链表,集合,因此,常用来提供数据结构服务. 

redis和memcached相比,的独特之处:  
1: redis可以用来做存储(storge), 而memccached是用来做缓存(cache)
  这个特点主要因为其有”持久化”的功能.  
2: 存储的数据有”结构”,对于memcached来说,存储的数据,只有1种类型--”字符串”,
  而redis则可以存储字符串,链表,哈希结构,集合,有序集合.  


Redis下载安装  
 
1:官方站点: redis.io 下载最新版或者最新stable版  
2:解压源码并进入目录  
3: 不用configure  
4: 直接make   
(如果是32位机器 make 32bit)   

注:易碰到的问题,时间错误.  
原因: 源码是官方configure过的,但官方configure时,生成的文件有时间戳信息,  
Make只能发生在configure之后,  
如果你的虚拟机的时间不对,比如说是2012年  
解决: date -s ‘yyyy-mm-dd hh:mm:ss’   重写时间  
　　　再 clock -w  写入cmos

5: 可选步骤: make test  测试编译情况
(可能出现: need tcl  >8.4这种情况, yum install tcl)

6: 安装到指定的目录,比如 /usr/local/redis  
make  PREFIX=/usr/local/redis install  
注: PREFIX要大写  

7: make install之后,得到如下几个文件  
redis-benchmark  性能测试工具  
redis-check-aof  日志文件检测工(比如断电造成日志损坏,可以检测并修复)  
redis-check-dump  快照文件检测工具,效果类上  
redis-cli  客户端  
redis-server 服务端  

![](./image/img01.png)

8: 复制配置文件  
cp /path/redis.conf /usr/local/redis  


9: 启动与连接  
/path/to/redis/bin/redis-server  ./path/to/conf-file  
例:[root@localhost redis]# ./bin/redis-server ./redis.conf   

连接: 用redis-cli  
<pre>
#/path/to/redis/bin/redis-cli [-h localhost -p 6379 ]  
</pre>

10: 让redis以后台进程的形式运行   
编辑conf配置文件,修改如下内容;  
daemonize yes  



#Redis对于key的操作命令  

del key1 key2 ... Keyn    
作用: 删除1个或多个键  
返回值: 不存在的key忽略掉,返回真正删除的key的数量   

rename key newkey  
作用: 给key赋一个新的key名  
注:如果newkey已存在,则newkey的原值被覆盖  

renamenx key newkey     
作用: 把key改名为newkey  
返回: 发生修改返回1,未发生修改返回0  
注: nx--> not exists, 即, newkey不存在时,作改名动作  

<pre>
move key db  
redis 127.0.0.1:6379[1]> select 2  
OK  
redis 127.0.0.1:6379[2]> keys *
(empty list or set)
redis 127.0.0.1:6379[2]> select 0
OK
redis 127.0.0.1:6379> keys *
1) "name"
2) "cc"
3) "a"
4) "b"
redis 127.0.0.1:6379> move cc 2
(integer) 1
redis 127.0.0.1:6379> select 2
OK
redis 127.0.0.1:6379[2]> keys *
1) "cc"
redis 127.0.0.1:6379[2]> get cc
"3"
</pre>

(注意: 一个redis进程,打开了不止一个数据库, 默认打开16个数据库,从0到15编号,
如果想打开更多数据库,可以从配置文件修改)


keys pattern 查询相应的key  
在redis里,允许模糊查询key  
有3个通配符 *, ? ,[]  
*: 通配任意多个字符  
?: 通配单个字符  
[]: 通配括号内的某1个字符   
<pre>
redis 127.0.0.1:6379> flushdb  
OK  
redis 127.0.0.1:6379> keys *
(empty list or set)
redis 127.0.0.1:6379> mset one 1 two 2 three 3 four 4
OK
redis 127.0.0.1:6379> keys o*
1) "one"
redis 127.0.0.1:6379> key *o
(error) ERR unknown command 'key'
redis 127.0.0.1:6379> keys *o
1) "two"
redis 127.0.0.1:6379> keys ???
1) "one"
2) "two"
redis 127.0.0.1:6379> keys on?
1) "one"
redis 127.0.0.1:6379> set ons yes
OK
redis 127.0.0.1:6379> keys on[eaw]
1)"one"
</pre>

randomkey 返回随机key  

exists key  
判断key是否存在,返回1/0  

type key  
返回key存储的值的类型  
有string,link,set,order set, hash   

ttl key   
作用: 查询key的生命周期  
返回: 秒数  

注:对于不存在的key或已过期的key/不过期的key,都返回-1  
Redis2.8中,对于不存在的key,返回-2  

expire key 整型值  
作用: 设置key的生命周期,以秒为单位  

同理:   
pexpire key 毫秒数, 设置生命周期  
pttl  key, 以毫秒返回生命周期  

persist key  
作用: 把指定key置为永久有效  

