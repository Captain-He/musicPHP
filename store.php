<?php
  date_default_timezone_set("PRC");
  error_reporting(0);
  $which=$_GET['which'];
  $singer=$_GET['singer'];
  $name=$_GET['name'];
  $user=$_GET['user'];

  include"conn.php";
  $sql = "select * from store where user="."'".$user."'";
  $outcome = mysql_query($sql);
 while($sql=mysql_fetch_array($outcome))
 {
 	
 	if($sql['which']==$which)
 	{

 	
 		echo "<script > alert('这首歌您之前已经添加过了！返回收藏页面查看！'); window.location=".'"'."mysong.php?user=".$user.'"'."</script>"; 
 		
	  exit;
 	}
 
 }
  
      $sql="insert into store (user,name,singer,time,which) values("."'".$user."'".','."'".$name."'".','."'".$singer."'".','."'".date("Y-m-d")."'".','."'".$which."'".')';
	  $a=mysql_query($sql,$online);
	  
	  	echo "<script > alert('添加成功！返回收藏页面查看！'); window.location=".'"'."mysong.php?user=".$user.'"'."</script>"; 
	  mysql_close();
	  //header("Location:mysong.php?user=".$_GET['user']);
	//  exit;

?>


