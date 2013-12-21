<! DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transtitional//EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml1-transtitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset= utf-8">
	<title> this is another page</title>
	</head>	
	<body>
		<?php
			$username = $_POST['txt_username'];
			$password = $_POST['txt_pwd'];
			if ($abc = mysql_connect('localhost','root',''))
			mysql_select_db('mytest');
			$query = "select count(*) as isexist from info_of_user where (username = '$username' and password ='$password')";
			$r = mysql_query($query);
			$row = mysql_fetch_array($r);
			$is_exist = $row['isexist'];
			if ($is_exist < 1) print('<p> <a href = "http://localhost/soft_0.1/prelogin.php" > 用户名不存在或密码错误，请返回登录 </a> </p>');
			else {
				$query = "select * from info_of_user where username = '$username' and password ='$password'";
				$r = mysql_query($query);
				$row = mysql_fetch_array($r);
				session_start();
				$_SESSION['name'] = $row['username'];
				$_SESSION['num'] = 1;
				print('<p><a href = "http://localhost/soft_0.1/foo.php"> 登录成功，返回首页</a></p>');
			}
			$_SESSION['name'] = $username;
			
		?>
	</body>
</html>