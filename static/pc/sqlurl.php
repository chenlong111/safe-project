<?php
header("Content-type: text/json; charset=utf-8");  
	// 指定允许其他域名访问  
	header('Access-Control-Allow-Origin:*');  
	$link=mysql_connect('localhost','root','chenlong521') or die("数据库连接错误：".mysql_error());
	$sql_content=mysql_select_db("safe-project",$link);
	mysql_query("set character set 'utf8'");
	mysql_query("set names 'utf8'");
?>