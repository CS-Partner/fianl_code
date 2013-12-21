<! DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transtitional//EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml1-transtitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset= utf-8">
	<title> this is another page</title>
	</head>	
	<body>
		<?php
			if ($abc = mysql_connect('localhost','root',''))
			print ("<p>connect </p>");
			mysql_select_db('mytest');
			//if (mysql_query('create database mytest')) print("<p>my test succeed</p>");
			//else print("<p>failed mytest</p>");
			$query = 'create table my_info(name_id int ,name varchar(20),sex varchar(2))';
			if (mysql_query($query)) print("<p> table created</p>");
			$query = 'create table user_info(first_name varchar(5), last_name varchar(10),email varchar(30))';
			if (mysql_query($query)) print("<p> table user_info created</p>");
			mysql_close();
		?>
	</body>
</html>