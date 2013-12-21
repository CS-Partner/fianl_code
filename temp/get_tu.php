<?php 
	$abc = mysql_connect('localhost','root','');
	mysql_select_db('mytest');
	$query = "select * from test_pic";
	$result=mysql_query($query);
	While($row=mysql_fetch_object($result)) 
{
	$pi = $row['thispi'];
	print("<p>$pi</p>");
 } 
 ?> 