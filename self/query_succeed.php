<! DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transtitional//EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml1-transtitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>发布信息</title>
    <link href="images0235/style.css" rel="Stylesheet" type="text/css" />
</head>
<body>
	<?php
		session_start();
		$this_query = $_POST['query_of_thing'];
		$this_name = $_SESSION['name'];
		//print("<p>$this_kind</p>");
		$this_time = date('Y-m-d');
		$abc = mysql_connect('localhost','root','');
		mysql_select_db('mytest');
		mysql_query("set names utf8");
		$query = "insert into need_of_user (username,state,currenttime) values ('$this_name','$this_query','$this_time')";
		if($i = mysql_query($query))  
		{
			print('<p> 上传成功 </p>');
		}
		print('<a href = "http://localhost/soft_0.1/self/public.php" style="text-decoration:none;"> 返回个人主页 </a>');
	?>
</body>
</html>