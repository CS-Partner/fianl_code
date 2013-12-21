<?php 
	$abc = mysql_connect('localhost','root','');
	mysql_select_db('mytest');
	$query = "select * from test_pic";
	$result=mysql_query($query);
	While($row=mysql_fetch_object($result)) 
{
	print("<p>this is a picture:</p>");
	echo "<IMG SRC=\"Second.php3? pid=$row->pid\">"; 
 } 
 ?> 