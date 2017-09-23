<?php 

	include("conn.php");
	 $mysql="DELETE FROM store WHERE user =". "'".$_GET['user']."'"."and which="."'".$_GET['which'] ."'";
	
	mysql_query($mysql,$online);
	mysql_select_db("user", $online);
	mysql_close($online);
	
   echo '<script type="text/javascript"> alert("删除成功"); window.location='.'\''.'mysong.php?user='.$_GET['user'].'\''.'</script>';
?>