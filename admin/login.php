<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>管理中心登陆 V1.0</title>
</head>
    <body style="background-color: #002779">
    <div style="width:400px;height:250px;margin-top: 200px;background-color: #ffffff;margin-left: auto;margin-right: auto;">
	    <div style="text-align: center;padding-top: 20px;">
	    	<form action="login.class.php?method=login" method="post">
	    		<h3>用户登录</h3>
	    		<p>用户名:<input type="text" name="username"></p>
	    		<p>密&nbsp;&nbsp;码:<input type="password" name="password"></p>
	    		<p><input type="submit" value="登录">
	    			<input type="reset" value="重置">
	    		</p>
	    		<label style="color: red;"><?php if(isset($_GET['point']))echo $_GET['point']?></label>
	    	</form>
	    </div>
    </div>
    </body>
</html>