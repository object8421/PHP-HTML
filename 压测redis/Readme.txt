������Ҫ����ʹ��webbench  ���php ��ѹ��redis��
Ϊ��֤��above Twemproxy ���и�lvs������redis�ͻ�������lvs �кܶ�timeout�������
��������ǣ�ʹ��tw�� tcp-keepaliveѡ�

https://github.com/twitter/twemproxy/issues/329

Ϊ���ܸ��õ�ѧϰ����ʹ��webbench ���php��ѹ��redis�������Լ�дѹ����롣

-----------------------------------------------------------
webbench��װ�뿴���£�

http://zyan.cc/post/288/

�����Խ����
------------------------------------------------
[root@QD1 /]# webbench -c 500 -t 30 http://192.168.2.95/set.php
Webbench - Simple Web Benchmark 1.5
Copyright (c) Radim Kolar 1997-2004, GPL Open Source Software.

Benchmarking: GET http://192.168.2.95/set.php
500 clients, running 30 sec.

Speed=36876 pages/min, 127022 bytes/sec.
Requests: 18409 susceed, 29 failed.
---------------------------------------------------------------
����set.php���û�м�close redisѡ���ѹ������֮�󡣺ܶ�ESTABLISHED ״̬��
php����Ϊset.php

netstat -ano | grep 6379 | wc -l
netstat -ano | grep 6379  | grep ESTABLISHED | wc -l
netstat -ano | grep 6379  | grep TIME_WAIT | wc -l

�ͻ��������ر�����ʱ���ᷢ�����һ��ack��Ȼ������TIME_WAIT״̬����ͣ��2��MSLʱ��(����MSL�Ľ���)������CLOSED״̬��
ѹ������֮�����ǻᷢ��ESTABLISHED �� TIME_WAIT ����ʧ.
���±�ѹ��������ܿ�,�������500������ ���·�����������256M�ڴ棩

[root@HD2 html]# netstat -ano | grep 6379  | grep TIME_WAIT | wc -l
2048
[root@HD2 html]# netstat -ano | grep 6379  | grep ESTABLISHED | wc -l
4

---------------------------------------------------
���ڳ���һ���ڲ���redisʱ��������close redis��� ��php����Ϊget.php.
�����û��close��һ���ġ�

