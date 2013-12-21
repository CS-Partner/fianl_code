<! DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transtitional//EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml1-transtitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en">
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>发布信息</title>
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
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="http://localhost/soft_0.1/foo.php"  style="text-decoration:none;"><strong><center>首页</center></strong> </a></td>
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="http://localhost/soft_0.1/book.php" style="text-decoration:none;"><strong><center>图书</center></strong></a></form></td> 
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="http://localhost/soft_0.1/life.php" style="text-decoration:none;"><strong><center>生活杂物</center></strong></a></td>
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="http://localhost/soft_0.1/free.php" style="text-decoration:none;"><strong><center>其他</strong></strong></a></td>
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="http://localhost/soft_0.1/talk.php" style="text-decoration:none;"><strong><center>需求区</strong></strong></a></td>
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="http://localhost/soft_0.1/prelogin.php" style="text-decoration:none;"><strong><center>登录</strong></strong></a></td>
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="http://localhost/soft_0.1/preregister.php" style="text-decoration:none;"><strong><center>注册</strong></strong></a></td>
		</table>
	</tr>
</table>	
	<?php
	$abc = mysql_connect('localhost','root','');
	mysql_select_db('mytest');
	mysql_query("set names utf8");
	?>
	<hr>
    <table>
		<tr>
			<td valign = "top" bgcolor = "#DFEDEF">
				<table bgcolor = "#25Fd65">
					<tr>
						<td width = "580px">
							发布的物品
						</td>
					</tr>
				</table>
				<table>
					<?php
						$query = "select * from user_to_thing where username = '$name';";
						$r = mysql_query($query);
						while ($row = mysql_fetch_array($r))
						{
					?>
					<tr>
						<?php
							$this_id =$row['id'];
							$query = "select * from info_of_thing where id = '$this_id';";
							$id_r = mysql_query($query);
							$id_row = mysql_fetch_array($id_r);
							$this_name = $id_row['name'];
							print("<td width = '500px'>$this_name</td> ");
							print("<td width = '40px'><a href='http://localhost/soft_0.1/current.php?id={$this_id}' style='text-decoration:none;'>查看</a></td>");
							print("<td width = '40px'><a href='http://localhost/soft_0.1/delete_thing.php?id={$this_id}' style='text-decoration:none;'>删除</a></td>");
						}
						?>
					</tr>
				</table>
				<table bgcolor = "#25Fd65">
					<tr>
						<td width = "580px">
							需求的物品
						</td>
					</tr>
				</table>
				<table>
					<?php
						$query = "select * from need_of_user where username = '$name';";
						$r = mysql_query($query);
						while ($row = mysql_fetch_array($r))
						{
					?>
					<tr>
						<?php
							$this_state =$row['state'];
							$this_query_id = $row['id'];
							print("<td width = '540px'>$this_state</td> ");
							print("<td width = '40px'><a href='http://localhost/soft_0.1/delete_query.php?id={$this_query_id}' style='text-decoration:none;'>删除</a></td>");
						}
						?>
					</tr>
				</table>
			</td>
			<td width = "700px" bgcolor = "#EEEEEE">
				<table>
				<tr>
					<table height = "250px">
						<form action="public_succeed.php" method="post" enctype="multipart/form-data">       
							<tr>
								<td width = "50"> 商品名</td>
								<td width = "10%"> 
									<input type="text" name="thing_name"/> 
								</td>
								<td>商品种类 <select name="this_kind">
											 <option>图书</option>
										   	 <option>生活用品</option>
											 <option>其他</option>
											 </select>
								</td>
							</tr>
							<tr>
								<td width = "50"> 商品需求 </td>
								<td > <input type="text" name="thing_query"/> </td>
								<td >（交换或出售）</td>
							</tr>
							<tr>
								<td>
									<input type="file" name="picture_file"/>
								</td>
								<td>
									<input type="submit" name="btn_upload" value="发布物品" />
								</td>
							</tr>
							<tr>
								<td width = "200px">(图片文件名请不要含中文)</td>
							</tr>
						</form>
					</table>
					<table height = "100px">
						<form  action="query_succeed.php" method="post">
							<tr>
								<td>
									需求描述
								</td>
								<td>
									<input type = "text" name = "query_of_thing"/>
								</td>
								<td>
									<input type="submit" name="query_submit" value="发布需求" />
								</td>
							</tr>
						</form>
					</table>
				</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>
