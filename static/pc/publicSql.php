<?php
	header("Content-type: text/json; charset=utf-8");  
	// 指定允许其他域名访问  
	header('Access-Control-Allow-Origin:*');  
	$dbms='mysql';
	$dbName='safe-project';
	$user='root';
	$pwd='chenlong521';
	$host='127.0.0.1';
	$dsn="$dbms:host=$host;dbname=$dbName";
?>