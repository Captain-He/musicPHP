
<html>
<head>
	<title>后台管理</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="CSS.css">
<style type="text/css">
td
{ 
	 height:25px;
}
</style>
</head>
<body>
<table align = "center" border = "1" width = "960" style="text-align: center;">
	<tr>
		<td colspan="4">欢迎你，管理员</td>
	</tr>
</table>
<?php
	include "page.cless.php";
	include("..\conn.php");
	$outcome= mysql_query("SELECT * FROM user",$online);
	$total = mysql_num_rows($outcome);
	$num = 10;
	$page = new Page($total,$num,"");
	$sql = "select * from user {$page->limit}";
	$outcome = mysql_query($sql);
	echo '<table align = "center" border = "1" width = "960"  style="text-align: center;">';
	echo "<caption><h1>用户管理</h1></caption>";
	echo "<tr>";
	echo "<td>"."账号"."</td>";
	echo "<td>"."密码"."</td>";
	echo "<td>"."邮箱"."</td>";
	echo "<td>"."用户级别"."</td>";
	echo "<td>"."操作"."</td>";
	echo "</tr>";
	while($sql = mysql_fetch_array($outcome))
	{
		
			if($sql['class']=='3')
				$h="会员";
			if($sql['class']=='0')
				$h="普通";
			if($sql['class']=='1')
				$h="管理员";

		
		if($sql['class']=='1')
		{
			echo "<tr>";
			echo "<td>".$sql['username']."</td>";
			echo "<td>".$sql['password']."</td>";
			echo "<td>".$sql['email']."</td>";
			echo "<td>".$h."</td>";
			echo "<td>"."&nbsp;&nbsp;不可操作&nbsp;&nbsp;"."</td>";
			echo "</tr>";
		}
		else{
			echo "<tr>";
			echo "<td>".$sql['username']."</td>";
			echo "<td>".$sql['password']."</td>";
			echo "<td>".$sql['email']."</td>";
			echo "<td>".$h."</td>";
			 echo "<td>"."<a href="."\""."delete_user.php?"."username=".$sql['username']."\"".">&nbsp;&nbsp;删除&nbsp;|&nbsp;</a>";
			echo "<a href="."\""."xiu.php?"."username=".$sql['username']."\"".">修改&nbsp;&nbsp;</a></td>";
			echo "</tr>";
		}

	   
		
	}
	echo "<tr><td colspan = \"9\" align = \"center\">".$page->fpage(array(3,4,5,8,6,7,2,0,))."</td></tr>";
	echo "<tr><td colspan = \"9\" align = \"center\"><a href=\"..\index.php\">返回界面</a></td></tr>";
	echo "</table>";
	mysql_close($online);
?>
</body>
</html>
