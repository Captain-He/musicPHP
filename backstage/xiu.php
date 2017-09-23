<?php
	
include("..\conn.php");
session_start();

	$jii="SELECT *from user WHERE  username =". '"'.$_GET['username'].'"' ;
	$jiii=mysql_query($jii,$online);
	$sql=mysql_fetch_array($jiii);
	

?>
<html>
<head>
<meta charset="UTF-8"/>
<style type="text/css">
.add_top
{ 
	margin-top: 100px;
}
td
{ 
	width: 90px;
	height: 30px;
	font-size: 18px;
}
body
{ 
	
}
input
{
	width: 150px;
}
</style>
</head>
<body>
	<table align="center" class="add_top">
	<form method="POST" action="xiusql.php?username=<?php echo $sql['username']; ?>">
		<tr>
			<td>账号：</td>
			<td><input type="text" name="username"  value="<?php echo $sql['username']?>"/></td>
			
		</tr>
		<tr>
			<td>密码：</td>
			<td><input type="password" name="password" /></td>
			
		</tr>
		<tr>
			<td>重复密码：</td>
			<td><input type="password" name="repassword"  /></td>
			
		</tr>
		<tr>
			<td>邮箱：</td>
			<td><input type="text" name="email" value="<?php echo $sql['email']?>"/></td>
			
		</tr>
		<tr>
		<td>类别：</td>
		<td>
			<select name= "class">
					<option value="<?php echo $sql['email']=1;?>">管理员</option>
				  	<option value="<?php echo $sql['email']=0;?>">普通用户</option>
				 	<option value="<?php echo $sql['email']=3;?>">会员</option>
			</select>
		</td>
		</tr>
		</tr>
		
		<tr>
			<td><input style="width:50px;" type="submit" value="提交" /></td>
			<td><input style="width:50px;" type="reset" value="重置" /></td>
		</tr>
		<tr>
			<td class='ree' colspan="2"><a href="index.php" >返回登陆界面</a></td>
		</tr>
	</form>
	</table>
</body>
</html