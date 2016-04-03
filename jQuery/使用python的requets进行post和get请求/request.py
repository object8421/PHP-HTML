#coding:utf8
#官方链接:http://cn.python-requests.org/zh_CN/latest/user/quickstart.html#post
"""
Python 标准库中的 urllib2 模块提供了你所需要的大多数 HTTP 功能，
但是它的 API 太渣了。它是为另一个时代、另一个互联网所创建的。
它需要巨量的工作，甚至包括各种方法覆盖，来完成最简单的任务。
"""
import json
import requests


#####get方式请求
#
# payload = {'name': 'knight'}
# r = requests.get("http://127.0.0.1/get.php", params=payload)   #记住是params=....
# print r.text

##post方式请求:
payload = {'name': 'knight'}
r = requests.post("http://127.0.0.1/server.php", data=payload)     ##记住是data=...
print r.text
