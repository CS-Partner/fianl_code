<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>哈工大旧物交易系统-生活杂物</title>
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
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="free.php" style="text-decoration:none;"><strong><center>其他</strong></strong></a></td>
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="talk.php" style="text-decoration:none;"><strong><center>需求区</strong></strong></a></td>
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="prelogin.php" style="text-decoration:none;"><strong><center>登录</strong></strong></a></td>
		<td background = "table1.jpg" width = "14%" height = "26px"><a href="preregister.php" style="text-decoration:none;"><strong><center>注册</strong></strong></a></td>
		</table>
	</tr>
		<?php
	$abc = mysql_connect('localhost','root','');
	mysql_select_db('mytest');
	mysql_query("set names utf8");
	?>
	<table width = "100%" height = "300" frame = "border" rules = "all" border = "3">
<?php
	$query = "select count(*) as this_num from info_of_thing where kind = '2' and finish = '1';";
	$r = mysql_query($query);
	$row = mysql_fetch_array($r);
	$this_num = $row['this_num'];
	$query = "select * from info_of_thing where kind = '2';";
	$r = mysql_query($query);
	while  ($this_num > 0){
?>
	<tr>
		<?php
			for ($i=1;$i<=3;$i++){
			if ($this_num > 0)
			{
		?>
			
				<?php
					$row = mysql_fetch_array($r);
					{
						$this_id = $row['id'];
						$this_name = $row['name'];
						$this_adress = 'self/'.$row["pic"];
						print("<td><p>$this_name</p> ");
						//print("<p>$this_name</p></td>")；
						?>
						<img src= '<?php echo $this_adress?>' width = "325" height = "250"/>
						<?php 
						$this_num = $this_num-1;
						print("<p><a href='current.php?id={$this_id}'>查看物品</p></a></td>");
					}
				?>
			
		<?php
			}
			}
		?>
	</tr>
<?php
	}
?>
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
