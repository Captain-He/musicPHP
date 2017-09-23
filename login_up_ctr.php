<?php
	$nameErr = $passwordErr = $repasswordErr = $twopasswordErr = $nicknameErr = "";
		
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
		    if (empty($_POST["username"])) 
		    	$nameErr = "用戶名是必填的";
		    if (empty($_POST["email"]))
		  	 	$passwordErr = "郵箱是必填的";
		    if (empty($_POST["password"])) 
		    	$nameErr = "密码是必填的";
			else 
		  		if (empty($_POST["repassword"]))
		  		$repasswordErr = "重复密码是必填的";
		  	else 
		  		if ($_POST["password"]!=$_POST["repassword"])
	    	    $twopasswordErr = "两次输入的密码不一样，请重新输入";
	    }
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
		if (!empty($_POST["username"]))
			if (!empty($_POST["password"]))
				if (!empty($_POST["repassword"]))
					if ($_POST["password"]==$_POST["repassword"])
						{
							
							include "conn.php";
							$sql="INSERT INTO user (account,password,nickname,class,jibie)
							VALUES ('$_POST[username]','$_POST[password]','$_POST[email]','0')";
							
							mysql_query($sql,$online);

							mysql_close($online);

							echo '<script type="text/javascript"> alert("普通用户创建成功"); window.location='.'\''.'land.php'.'\''.'</script>';
						}
?>