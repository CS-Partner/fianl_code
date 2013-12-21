<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>哈工大旧物交易系统-免费</title>
    <link href="images0235/style.css" rel="Stylesheet" type="text/css" />
</head>
<body bgcolor = "#FFFFFF">
<table  border="0" width = "1400px">
    <!-- 第一行 LOGO -->
	<tr>
	<td>
	<?php
		session_start();
		 $this_num = $_SESSION['num'];
		if ($this_num == 1) 
		{
			$name = $_SESSION['name'];
			print(" 欢迎您，$name  ");
			print('<a href = "http://localhost/soft_0.1/self/public.php" style="text-decoration:none;"> 个人主页 </a>');
			print('<a href = "http://localhost/soft_0.1/exit.php" style="text-decoration:none;">退出系统 </a> ');
		}
	?>
	</td>
	<td>
		<form action="search.php" method="post">
			<input type = "text" name = "search_query">
			<input type = "submit" name = "search_submit"  value = "搜索物品">
		</form>
	</td>
	</tr>
	<tr background = "head2.jpg"> <td colspan="2"><center><img src="image/logo.gif"/> </td> </tr>
	<!-- 第二行 目录 -->
	<tr colpan="2">
		<table border = "0" width="100%">
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="foo.php"  style="text-decoration:none;"><strong><center>首页</center></strong> </a></td>
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="book.php" style="text-decoration:none;"><strong><center>图书</center></strong></a></form></td> 
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="life.php" style="text-decoration:none;"><strong><center>生活杂物</center></strong></a></td>
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="free.php" style="text-decoration:none;"><strong><center>免费专区</strong></strong></a></td>
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="talk.php" style="text-decoration:none;"><strong><center>其他</strong></strong></a></td>
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="prelogin.php" style="text-decoration:none;"><strong><center>登录</strong></strong></a></td>
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="preregister.php" style="text-decoration:none;"><strong><center>注册</strong></strong></a></td>
		</table>
	</tr>
</table>
<hr>
<?php
	$this_id = $_GET['id'];
	$abc = mysql_connect('localhost','root','');
	mysql_select_db('mytest');
	mysql_query("set names utf8");
	$query =  "select * from info_of_thing where id = '$this_id'";
	$abc = mysql_query($query);
	while ($r = mysql_fetch_array($abc))
	{
		$this_adress = 'self/'.$r["pic"];
	?>
		<table>
			<tr>
				<td valign = "top" bgcolor = "#9DC3A1">
					<br><br>
					<?php
						$query = "select * from user_to_thing where id = '$this_id';";
						$name_r = mysql_query($query);
						$name_row = mysql_fetch_array($name_r);
						$this_name = $name_row['username'];
						$query = "select * from info_of_user where username = '$this_name';";
						$info_r = mysql_query($query);
						$info_row = mysql_fetch_array($info_r);
						$this_qq = $info_row['qq'];
						$this_ipone = $info_row['ipone'];
						$this_quer = $r['query'];
						print("<p>物品所属： $this_name </p>");
						print("<p>联系方式（Q Q）： $this_qq </p>");
						print("<p>联系方式（TEL）： $this_ipone </p>");
						print("<p>物品需求（TEL）： $this_quer </p>");
					?>
				</td>
				<td>
					<img src= '<?php echo $this_adress?>' width = "490" height = "490"/>
				</td>
				<td valign = "top" bgcolor = "#8FC39A">
					<p>该用户还发布过:</p>
					<p>物品</p>
					<?php
						$query = "select * from user_to_thing where username = '$this_name';";
						$other_thing_r = mysql_query($query);
						while($other_thing_row = mysql_fetch_array($other_thing_r))
						{
							$other_thing_id = $other_thing_row['id'];
							$query = "select * from info_of_thing where id = '$other_thing_id';";
							$other_r = mysql_query($query);
							$other_row = mysql_fetch_array($other_r);
							$current_name = $other_row['name'];
							$current_time = $other_row['currenttime'];
							print("<p>&nbsp;&nbsp;<a href='current.php?id={$other_thing_id}' style='text-decoration:none;'>$current_name &nbsp;&nbsp;&nbsp;</a>$current_time</p>");
						}
					?>
					<p>需求</p>
					<?php
						$query = "select * from need_of_user where username = '$this_name';";
						$other_query_r = mysql_query($query);
						while($other_query_row = mysql_fetch_array($other_query_r))
						{
							$other_query_state = $other_query_row['state'];
							$other_query_time = $other_query_row['currenttime'];
							print("<p>&nbsp;&nbsp;$other_query_state &nbsp;&nbsp;&nbsp; $other_query_time</p></a>");
						}
					?>
				</td>
			</tr>
		</table>		
	<?php
	}
	//print $_GET['id'];
?>
</body>
</html>