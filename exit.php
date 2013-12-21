<! DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transtitional//EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml1-transtitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset= utf-8">
	<title> this is another page</title>
	</head>	
	<body>
		<?php
			session_start();
			$_SESSION['num'] = 0;
			print('<p> <a href = "http://localhost/soft_0.1/foo.php" > 退出成功，返回首页 </a> </p>');
		?>
	</body>
</html>