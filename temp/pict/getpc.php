<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>测试</title>
    <link href="images0235/style.css" rel="Stylesheet" type="text/css" />
</head>
<body>
	<table>
	<?php
		$abc = mysql_connect('localhost','root','');
		mysql_select_db('mytest');
		$query = "select * from pic";
		$abc = mysql_query($query);
		while ($r = mysql_fetch_array($abc))
		{
		?>
				<img src= '<?php echo $r["name"]?>' width = "390" height = "390"/>
				
		<?php
		}
	?>
	</table>
</body>
</html>