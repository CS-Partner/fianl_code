<! DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transtitional//EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml1-transtitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en">
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>注册</title>
    <link href="images7/style.css" rel="Stylesheet" type="text/css" />
</head>
	<?php
		session_start();
		 !$this_num = $_SESSION['num'];
		if ($this_num == 1) 
		{
			print('<p>您已经登录，无法再次登录 </p>');
			print('<a href = "http://localhost/soft_0.1/self/public.php" style="text-decoration:none;">点击返回个人主页 </a>');
		}
		else
		{
	?>
<body class="bodycss">
    <form action="login.php" method="post">
    <table class="tablecss" cellspacing="0" cellpadding="0">
        <tr>
            <td colspan="3" class="td_top">用户登录</td>
        </tr>
        
         <tr>
            <td class="td_center1"> 用户名</td>
            <td class="td_center2"> <input type="text" name="txt_username"  class="txt1"/> </td>
        </tr>
		<tr>
            <td class="td_center1"> 密码</td>
            <td class="td_center2"> <input type="password" name="txt_pwd"  class="txt1"/> </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
               <!-- <input type="reset" name="btn_reset" class="btn_1" value="重置" />-->
                <input type="submit" name="btn_submit" class="btn_1" value="登录" />
            </td>
        </tr>
        <tr>
            <td colspan="3" class="td_bottom"></td>
        </tr>
    </table>
    </form>
<?php
	}
?>
</body>
</html>
