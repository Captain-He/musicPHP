<?php 
	session_start();

							include "../conn.php";
							$sql="UPDATE user SET username='$_POST[username]',password='$_POST[password]',email='$_POST[email]',class='$_POST[class]'
							WHERE username ='$_GET[username]';";
						
							$y=mysql_query($sql,$online);
						
							if($y)
								echo '<script type="text/javascript"> alert("用户信息修改成功"); window.location='.'\''.'index.php'.'\''.'</script>';

							mysql_close($online);


							
						
?>