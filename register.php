<! DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transtitional//EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml1-transtitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset= utf-8">
	<title> this is another page</title>
	</head>	
	<body>
		<?php
			$txt_username = $_POST['txt_username'];
			$txt_email = $_POST['txt_email'];
			$txt_pwd= $_POST['txt_pwd'];
			$sure_txt_pwd = $_POST['sure_txt_pwd'];
			$txt_iphone = $_POST['txt_iphone'];
			$txt_qq = $_POST['txt_qq'];
			if ($abc = mysql_connect('localhost','root',''))
			mysql_select_db('mytest');
			$query = "select count(*) as same_user from info_of_user where (username ='$txt_username')";
			$r = mysql_query($query);
			$row = mysql_fetch_array($r);
			$is_same_user = $row['same_user'];
			if ($is_same_user > 0) print('<p><a href = http://localhost/soft_0.1/preregister.php> 用户名已存在，请重新注册 </a></p>');
			else if ($txt_pwd === $sure_txt_pwd){
				$query = "insert into info_of_user(username,password,email,ipone,qq) values('$txt_username','$txt_pwd','$txt_email','$txt_iphone','$txt_qq')";
				mysql_query($query);
				print("<p> 注册成功 </p>");
				}
			else print('<p><a href = http://localhost/soft_0.1/register.html> 两次密码输入不匹配，请重新注册 </a></p>');
			mysql_close();
		?>
		<a href="foo.php"> 返回首页 </a>
	</body>
</html>