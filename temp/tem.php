<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>哈工大旧物交易系统</title>
    <link href="images0235/style.css" rel="Stylesheet" type="text/css" />
</head>
<body>
<?php
	header("Content-type: text/html; charset=utf-8");
	$abc = mysql_connect('localhost','root','');
	mysql_select_db('mytest');
	mysql_query("SET NAMES utf8");
	//$query = "CREATE TABLE info_of_thing (id int(3) NOT NULL AUTO_INCREMENT,name varchar(30) NOT NULL,kind int(2) NOT NULL,finish int(2) NOT NULL) ENGINE=InnoDB  DEFAULT CHARSET=utf8;";
	//$row = mysql_fetch_array($r);
	//$is_name = $row['name'];
	//echo $is_name;
?>
<table width = "80%" height = "300" frame = "border" rules = "all">
<?php
	$query = "select count(*) as this_num from info_of_thing;";
	$r = mysql_query($query);
	$row = mysql_fetch_array($r);
	$this_num = $row['this_num'];
	$query = "select * from info_of_thing;";
	$r = mysql_query($query);
	while  ($this_num > 0){
?>
	<tr>
		<?php
			for ($i=1;$i<=3;$i++){
		?>
			
				<?php
					$row = mysql_fetch_array($r);
					{
						$this_id = $row['id'];
						$this_name = $row['name'];
						print("<td>$this_id");
						print("<p>$this_name</p></td>");
						$this_num = $this_num-1;
					}
				?>
			
		<?php
			}
		?>
	</tr>
<?php
	}
?>
</table>
</body>
</html>