<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>发布信息</title>
    <link href="images0235/style.css" rel="Stylesheet" type="text/css" />
</head>
<body>
	<?php
		session_start();
		$this_btn = $_POST['btn_upload'];
		$this_name = $_SESSION['name'];
		$this_thing = $_POST['thing_name'];
		$this_query = $_POST['thing_query'];
		$this_file = $_FILES['picture_file'];
		$return_value =  $_POST['this_kind'];
		$this_book = "图书";
		$this_life = "生活用品";
		$this_free = "其他";
		if($this_book == $return_value)
		{
			$this_kind = 1;
		}
		else if ($this_free == $return_value)
		{
			$this_kind = 3;
		}
		else
		{
			$this_kind = 2;
		}
		$current_kind = $this_kind;
		//print("<p>$this_kind</p>");
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
				$this_time = date('Y-m-d');
				$abc = mysql_connect('localhost','root','');
				mysql_select_db('mytest');
				mysql_query("set names utf8");
				$query = "insert into info_of_thing (name,kind,finish,pic,query,currenttime) values ('$this_thing','$current_kind','1','$path','$this_query','$this_time')";
				//print("<p>$current_kind</p>");
				mysql_query($query);
				$query = "insert into user_to_thing(username) value ('$this_name')";
				mysql_query($query);
				$i= move_uploaded_file($myfile['tmp_name'],$path);  
				if($i == true)  
				{
					print("<p>上传成功 !</p>");
				}
				print('<a href = "http://localhost/soft_0.1/self/public.php"> 返回个人主页 </a>');
				//print("<p>查看自己上传的物品 </p>")；
			}

		}	
	?>
</body>
</html>