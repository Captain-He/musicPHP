	<?php
	$Err="";
	$a=0;
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{	
		include("conn.php");

		$outcome= mysql_query("SELECT * FROM user",$online);
		$sql = mysql_fetch_array($outcome);
		
		if(mysql_num_rows($outcome))
		{
				while($sql = mysql_fetch_array($outcome))
			{ 
				if (strcmp($sql['username'],$_POST['username']))
					$a=$a+1;
				if (strcmp($sql['password'],$_POST['password']))
					$a=$a+1;
				if ($a==0)
					{
						mysql_close($online);

						
						if($sql['class']=='1')
						{
							echo '<script type="text/javascript"> alert("欢迎管理员登陆！"); window.location='.'\''.'backstage/manage.php'.'\''.' </script>';

						}
						if($sql['class']=='3')
						{

							 $json=$sql['username'].";"."1".";"."1".";".$sql['class'].";";
							 file_put_contents("boom.php", $json);
							
							echo '<script type="text/javascript"> alert("欢迎会员登陆！"); window.location='.'\''.'first.php?a=1&b=1&name='.$sql['username'].'&class='.$sql['class'].'\''.' </script>';

							
						}
						else 
						{
							  $json=$sql['username'].";"."1".";"."1".";".$sql['class'].";";
							 file_put_contents("boom.php", $json);
						 echo '<script type="text/javascript"> alert("登陆成功！"); window.location='.'\''.'first.php?a=1&b=1&name='.$sql['username'].'&class='.$sql['class'].'\''.' </script>';
						 
						}
					};
				$a=0;
			}
		}
		else
		{
			mysql_error();
		}

		
		echo '<script type="text/javascript"> alert("用户名不存在或密码错误"); window.location='.'\''.'index.php'.'\''.' </script>';
	}
?>