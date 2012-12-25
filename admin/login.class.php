<?php require_once '../conf/connection.php';
header("Content-Type: text/html; charset=utf-8");
/*
 **************************
 *	登录
 **************************
*/
if($_GET["method"] == 'login'){
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	
	$con = mysql_connect($DB_HOST.':'.$DB_PORT,$DB_USER,$DB_PWD);
	if(!$con){
		die('Could not connect: ' . mysql_error());
	}else{
		mysql_select_db($DB_NAME, $con);
		$r = mysql_query("select * from admin where username = '$username' and password = '$password'",$con);
		mysql_close($con);
		if($r){
			$num = mysql_num_rows($r);
			if($num == 1){
				header('location:index.php');
				exit();
			}else{
				header('location:login.php?point=登录失败');
			}
				
		}
	}
}
	
?>