 
<?php

$picture = $_POST['uploadFile'];
If($picture != "none") 
{ 
	$abc = mysql_connect('localhost','root','');
	mysql_select_db('mytest');
	//$PSize = filesize($picture); 
	//$mysqlPicture = addslashes(fread(fopen($Picture, "r"), $PSize));
	$query = "INSERT INTO test_pic (thispi) VALUES ('$picture')";
	mysql_query($query); 
	print('<p>插入成功</p>');
 } 
 ?>
 
 

 
 
 
 
 
 
 
 
 
 
 