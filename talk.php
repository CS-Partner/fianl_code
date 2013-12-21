<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>哈工大旧物交易系统-生活杂物</title>
    <link href="images0235/style.css" rel="Stylesheet" type="text/css" />
</head>
<body bgcolor = "#FFFFFF">
<table  border="0" width = "1400px">
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
		<?php
	$abc = mysql_connect('localhost','root','');
	mysql_select_db('mytest');
	mysql_query("set names utf8");
	?>
	<table bgcolor = "#57BA25" width = "100%" height = "300" frame = "border" rules = "all" border = "3">
		<tr>
			<td width = "570px"> 需求信息 </td>
			<td width = "30px"> 发布人 </td>
			<td width = "30px"> 发布时间</td>
			<td width = "30px"> 联系QQ</td>
			<td width = "30px"> 联系电话</td>
		</tr>
		<?php
			$query = "select * from need_of_user;";
			$r = mysql_query($query);
			while ($row = mysql_fetch_array($r))
			{
		?>
		<tr>
			<?php
				$this_name = $row['username'];
				$this_state = $row['state'];
				$this_date = $row['currenttime'];
				print("<td width = '570px'> $this_state </td>");
				print("<td width = '30px'> $this_name </td>");
				print("<td width = '30px'> $this_date </td>");
				$query = "select *from info_of_user where username = '$this_name';";
				$user_r = mysql_query($query);
				$user_row = mysql_fetch_array($user_r);
				$this_qq = $user_row['qq'];
				$this_ipone  =  $user_row['ipone'];
				print("<td width = '30px'> $this_qq </td>");
				print("<td width = '30px'> $this_ipone </td>");
			}
			?>
		</tr>
	</table>
<!-- 第六行 版权声明 -->
	<pre>
	<br/><br/><br/><br/>
    <tr>
        <td "center" colspan="2" class="td_6">
				郑重声明：本站不负责交易的具体细节，之提供交易信息的平台，若交易过程中出现任何问题，本站相关工作人员概不负责！
        </td>
	</tr>
	<br/><br/><br/><br/><br/>
	<div id="cp" style="clear:both ">                                                              © 2013&nbsp;CS-Partner&nbsp;<a href="state.html" class="col_cp">旧物交易系统</a>
	</div>
	<center>
    </pre>
</table>	
</body>
</html>
