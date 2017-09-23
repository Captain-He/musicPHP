	<?php 
	include("../conn.php");

   $mysql="DELETE FROM user WHERE username =". "'".$_GET['username']."'" ;
echo $mysql;
	mysql_query($mysql,$online);



	mysql_select_db("user", $online);

	//$mysql="DELETE FROM borrow WHERE user = ".$_GET['id'];

	//mysql_query($mysql,$online);



	mysql_close($online);

echo '<script type="text/javascript"> alert("删除成功"); window.location="manage.php" </script>';
?>