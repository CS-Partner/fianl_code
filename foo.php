<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>哈工大旧物交易系统</title>
    <link href="images0235/style.css" rel="Stylesheet" type="text/css" />
</head>
<body bgcolor = "#FFFFFF">
<table  border = "0" width = "1400px">
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
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="free.php" style="text-decoration:none;"><strong><center>其他</strong></strong></a></td>
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="talk.php" style="text-decoration:none;"><strong><center>需求区</strong></strong></a></td>
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="prelogin.php" style="text-decoration:none;"><strong><center>登录</strong></strong></a></td>
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="preregister.php" style="text-decoration:none;"><strong><center>注册</strong></strong></a></td>
		</table>
	</tr>
	<hr>
</table>

<table valign = "top">
<?php
	$abc = mysql_connect('localhost','root','');
	mysql_select_db('mytest');
	mysql_query("set names utf8");
	?>
	<tr>
		<td valign = "top">
			<table bgcolor = "#25Fd65">
				<?php
				if (true){
				?>
				<tr>
					<td width = "220px">
						图书区
					</td>
					<td width = "80px">
						<a href = "book.php" style="text-decoration:none;">more</a>
					</td>
				</tr>
			</table>
			<table bgcolor = "#EFFEFE">
				<?php
				}
				?>
				<?php
					$query = "select count(*) as this_book_num from info_of_thing where kind = '1' and finish = '1';";
					$r = mysql_query($query);
					$row = mysql_fetch_array($r);
					$this_book_num = $row['this_book_num'];
					$query = "select * from info_of_thing where kind = '1';";
					$r = mysql_query($query);
					$current_num = 0;
					while ($this_book_num > 0 && $row = mysql_fetch_array($r))
					if ($current_num < 6)
					{
				?>
				<tr>
					<td width = "220px">
					<?php
						$this_id = $row['id'];
						$this_name = $row['name'];
						$this_time = $row['currenttime'];
						print("<p><a href='current.php?id={$this_id}'>$this_name</p></a>");
					?>
					</td>
					<td>
					<?php
						print("<p>$this_time</p>");
						$this_book_num = $this_book_num-1;
						$current_num = $current_num+1;
					}
					?>
					</td>
				</tr>
			</table>
		</td>
		<td>
			<div id="gpic" style="overflow:hidden; width:600px; height:182px;">
			<table border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td id="gpic1" valign="top" align="center">
					<table width="1000px" border="0" align='center' cellpadding="0" cellspacing="0">
						<tr>
							<td height="120" bgcolor="#FFFFFF">
							<?php
								$query = "select * from info_of_thing order by id desc";
								$r = mysql_query($query);
								$row = mysql_fetch_array($r);
								$this_adress = 'self/'.$row["pic"];
								$this_name = $row['name'];
								$this_id = $row['id'];
							?>
							<img src= '<?php echo $this_adress?>' width = "100px" height = "100px"/>
							<?php
								print("<p><a href='current.php?id={$this_id}'>$this_name</a></p>");
							?>
							</td>
							<td valign='top' bgcolor="#FFFFFF"> 
								<?php
								$row = mysql_fetch_array($r);
								$this_adress = 'self/'.$row["pic"];
								$this_name = $row['name'];
								$this_id = $row['id'];
							?>
							<img src= '<?php echo $this_adress?>' width = "100px" height = "100px"/>
							<?php
								print("<p><a href='current.php?id={$this_id}'>$this_name</a></p>");
							?>
							</td>
							<td valign='top' bgcolor="#FFFFFF"> 
															<?php
								$row = mysql_fetch_array($r);
								$this_adress = 'self/'.$row["pic"];
								$this_name = $row['name'];
								$this_id = $row['id'];
							?>
							<img src= '<?php echo $this_adress?>' width = "100px" height = "100px"/>
							<?php
								print("<p><a href='current.php?id={$this_id}'>$this_name</a></p>");
							?>
							</td>
														<td valign='top' bgcolor="#FFFFFF"> 
															<?php
								$row = mysql_fetch_array($r);
								$this_adress = 'self/'.$row["pic"];
								$this_name = $row['name'];
								$this_id = $row['id'];
							?>
							<img src= '<?php echo $this_adress?>' width = "100px" height = "100px"/>
							<?php
								print("<p><a href='current.php?id={$this_id}'>$this_name</a></p>");
							?>
							</td>
														<td valign='top' bgcolor="#FFFFFF"> 
															<?php
								$row = mysql_fetch_array($r);
								$this_adress = 'self/'.$row["pic"];
								$this_name = $row['name'];
								$this_id = $row['id'];
							?>
							<img src= '<?php echo $this_adress?>' width = "100px" height = "100px"/>
							<?php
								print("<p><a href='current.php?id={$this_id}'>$this_name</a></p>");
							?>
							</td>
														<td valign='top' bgcolor="#FFFFFF"> 
															<?php
								$row = mysql_fetch_array($r);
								$this_adress = 'self/'.$row["pic"];
								$this_name = $row['name'];
								$this_id = $row['id'];
							?>
							<img src= '<?php echo $this_adress?>' width = "100px" height = "100px"/>
							<?php
								print("<p><a href='current.php?id={$this_id}'>$this_name</a></p>");
							?>
							</td>
						</tr>
					</table>
				</td>
				<td id="gpic2" valign="top"></td>
			</tr>
			</table>
			</div>
			<script>
				var speed=30
				gpic2.innerHTML=gpic1.innerHTML
				function Marquee(){
					if(gpic2.offsetWidth-gpic.scrollLeft<=0)
						gpic.scrollLeft-=gpic1.offsetWidth
					else{
						gpic.scrollLeft++
						}
				}
				var MyMar=setInterval(Marquee,speed)
				gpic.onmouseover=function() {clearInterval(MyMar)}
				gpic.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
			</script>
		</td>
		<td valign = "top">
			<table bgcolor = "#25Fd65">
				<?php
				if (true){
				?>
				<tr>
					<td width = "220px">
						生活杂物
					</td>
					<td width = "80px">
						<a href = "book.php" style="text-decoration:none;">more</a>
					</td>
				</tr>
			</table>
			<table bgcolor = "#EFFEFE">
				<?php
				}
				?>
				<?php
					$query = "select count(*) as this_book_num from info_of_thing where kind = '2' and finish = '1';";
					$r = mysql_query($query);
					$row = mysql_fetch_array($r);
					$this_book_num = $row['this_book_num'];
					$query = "select * from info_of_thing where kind = '2';";
					$r = mysql_query($query);
					$current_num = 0;
					while ($this_book_num > 0 && $row = mysql_fetch_array($r))
					if ($current_num < 6)
					{
				?>
				<tr>
					<td width = "220px">
					<?php
						$this_id = $row['id'];
						$this_name = $row['name'];
						$this_time = $row['currenttime'];
						print("<p><a href='current.php?id={$this_id}'>$this_name</p></a>");
					?>
					</td>
					<td>
					<?php
						print("<p>$this_time</p>");
						$this_book_num = $this_book_num-1;
						$current_num = $current_num+1;
					}
					?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>	

<table >
	<!-- 第六行 版权声明 -->
	<br/><br/><br/><br/>
    <tr align = "Center">
		<td width = "100%">	
			声明：本站不负责交易的具体细节，之提供交易信息的平台，若交易过程中出现任何问题，本站相关工作人员概不负责！
		</td>
	</tr>
	<tr>
		<td width = "100%">
			© 2013&nbsp;CS-Partner&nbsp;<a href="state.html">旧物交易系统</a>
		</td>
	</tr>
</table>
</body>
</html>
