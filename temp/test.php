<! DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transtitional//EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml1-transtitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset= utf-8">
	<title> this is another page</title>
	</head>	
	<body>
		<?php
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$email = $_POST['email_name'];
			$posting = nl2br($_POST['posting']);
			$name = $first_name.' '.$last_name;
			$month = $_POST['month'];
			print"<div>Thank you,$name, for your posting:<p>$posting</p></div>";
			print"<div>$month</div>";
			$abc = mysql_connect('localhost','root','');
			mysql_select_db('mytest');
			$query = "insert into user_info(first_name,last_name,email) values('$first_name','$last_name','$email')";
			if (mysql_query($query)) print("<p> insert succeed</p>");
		?>
<table border="1" width = "1400px">
    <!-- 第一行 LOGO -->
	<tr> <td colspan="2"><center><img src="image/logo.gif"/> </td> </tr>
	<!-- 第二行 目录 -->
	<tr colpan="2">
		<table border="1" width="100%">
		<td>
		<td><a href="1.html" target="_self"><strong>首页 </strong> </a></td>
		<td><a href="2.html" target="_self"><strong>图书</strong></a></td>
		<td><a href="3.html" target="_self"><strong>生活杂物</strong></a></td>
		<td><a href="4.html" target="_self"><strong>免费专区</strong></a></td>
		<td><a href="5.html" target="_self"><strong>灌水区</strong></a></td>
		<td><a href="6.html" target="_self"><strong>登录</strong></a></td>
		<td><a href="7.html" target="_self"><strong>注册</strong></a></td>
		</table>
	</tr>	
	<!-- 第六行 版权声明 -->
    <tr>
        <td colspan="2" class="td_6">
            郑重声明：本站不负责交易的具体细节，之提供交易信息的平台，若交易过程中出现任何问题，本站相关工作人员概不负责！
        </td>
    </tr>
</table>	
</body>
</html>