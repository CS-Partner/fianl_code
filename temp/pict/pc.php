<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>测试</title>
    <link href="images0235/style.css" rel="Stylesheet" type="text/css" />
</head>
<body>
<?php
	$this_btn = $_POST['btn_upload'];
	$this_file = $_FILES['txt_file'];
		if($this_file['name'] != '')
		{
			$myfile = $this_file;
			if($myfile['size'] > 0 && $myfile['size'] < 1024 * 2000) 
			{
				$dir = 'upfiles/';                    
				if(!is_dir($dir))                 
				{
					mkdir($dir);                   
				}
				
				$name = $myfile['name'];             
				$rand = rand(100,800);              
				$name = date('YmdHis').$name;  
				$path = 'upfiles/'.$name;             
				
				$abc = mysql_connect('localhost','root','');
				mysql_select_db('mytest');
				$query = "insert into pic (name) values ('$path')";
				mysql_query($query);
				$i= move_uploaded_file($myfile['tmp_name'],$path);  
				if($i == true)  
				{
					print("<p> 上传成功</p>");
				}
			}

		}	
?>
</body>
</html>