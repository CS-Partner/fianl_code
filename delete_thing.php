<! DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transtitional//EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml1-transtitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en">
<head>
<meta http-equiv="Refresh" content="1;URL=http://localhost/soft_0.1/self/public.php" charset= utf-8">
<title> delete</title>
</head>
<body>
	<?php
		$abc = mysql_connect('localhost','root','');
		mysql_select_db('mytest');
		mysql_query("set names utf8");
		$this_id = $_GET['id'];
		//print("$this_id");
		$query = "delete from info_of_thing where id = '$this_id';";
		mysql_query($query);
		$query = "delete from user_to_thing where id = '$this_id';";
		if($r = mysql_query($query))
		{
			print('delete succeed');
		}
	?>
</body>
</html>