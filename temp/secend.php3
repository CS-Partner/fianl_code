<?php
$result=mysql_query("SELECT * FROM test_pic WHERE pid=$Pid"); 
$row=mysql_fetch_object($result); 
Header( "Content-type: image/gif"); 
echo $row->thispi; 
?>