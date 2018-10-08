<?php
require('sqlurl.php');
$user=$_POST['user'];
$password=sha1($_POST['password']);
$query=mysql_query("selct * from user where user=$user and password=$password and islogin=1");
$row=mysql_fetch_array($query);
if($row){
	echo json_encode($row);
}
else{
	echo json_encode("登录失败");
}
?>