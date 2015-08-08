<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:42px;
	top:251px;
	width:99px;
	height:72px;
	z-index:1;
}
#Layer2 {
	position:absolute;
	left:219px;
	top:11px;
	width:797px;
	height:603px;
	z-index:2;
	background-color: #CCFFFF;
}
#Layer3 {
	position:absolute;
	left:43px;
	top:387px;
	width:100px;
	height:67px;
	z-index:3;
}
#Layer4 {
	position:absolute;
	left:31px;
	top:282px;
	width:124px;
	height:53px;
	z-index:4;
}
#Layer5 {
	position:absolute;
	left:33px;
	top:51px;
	width:130px;
	height:56px;
	z-index:5;
}
#Layer6 {
	position:absolute;
	left:27px;
	top:266px;
	width:134px;
	height:72px;
	z-index:6;
}
.STYLE1 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
<head>
<meta charset="utf-8" />

<!--
  <meta http-equiv="refresh" content="3">     每3秒刷新一次整个页面

  -->
  <meta http-equiv="refresh" content="3">

</head>

<div id="Layer2">

  <?php
/*
利用数组来实现读取文件最后的n行

*/
//header('Location: http://127.0.0.1/file-read/');   //url重定向

$num=10;     //表示读取最后n行
$file="D:/phpStudy/WWW/file-read/file.txt";   //读取指定的文件
//echo $file;

//$fh = fopen('file.txt','r');
$fh = fopen("$file",'r');

$r = array();
while($l = fgets($fh)){
array_push($r,$l);
if(count($r)>$num){
array_shift($r);
}
file_put_contents('memory.txt',memory_get_usage());
}

//var_dump($r);
//echo $r;

//访问数组成员

for($i=0;$i < count($r);$i++) {

echo $r[$i].'<br />';   //换行符

}



?>
</div>
<div id="Layer4">
  
  <div align="left">
    <input name="button4" style="width:120px;height:60px;" type="button" onclick="history.go(0)" value="start 24web" />
  </div>
</div>

<div id="Layer5">
  
  <div align="left">
    <!--
	<input name="button3" style="width:120px;height:60px;" type="button" onclick="history.go(0)" value="stop 24web" />
	������һ��php����
	
		<input style="width:120px;height:60px;" onClick="javascript:window.location.href='test/stop-24web.php';" type="button" name="stop" value="stop 24web" />
		-->
		<script>	
function load(){
	//下面两种方法效果是一样的
	document.getElementById("target").onclick();	
}
function test(){
	alert("你要stop掉24-web的resin吗？如果是，请点击确定");
	window.location.href='test/stop-24web.php';	
}
	</script>
	
<div id="Layer7" onload="load()">		
<button id="target" style="width:120px;height:60px;" onclick="test()">stop 24web</button>
</div>


	
	
  </div>
</div>
