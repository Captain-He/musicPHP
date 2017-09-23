<?php
	$nameErr = $passwordErr = $repasswordErr = $twopasswordErr = $emailErr = "";
		
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
							$sql="INSERT INTO user (username,password,email,class)
							VALUES ('$_POST[username]','$_POST[password]','$_POST[email]','0')";
							
							mysql_query($sql,$online);

							mysql_close($online);

							echo '<script type="text/javascript"> alert("普通用户创建成功"); window.location='.'\''.'frist.php'.'\''.'</script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("出现错误，请重新申请"); window.location='.'\''.'index.php'.'\''.'</script>';
						}

?>


<!DOCTYPE html>

<html>
	<head>
	<meta charset="utf-8">	
	<title>Home</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	
	<link rel="stylesheet" href="css/bootstrap.css">	

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/sign_style.css">
	</head>
	<body>

	<div class="page-inner">	
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-color:#363535">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">欢迎 来到网易云音乐</span>
							<h1>听见生活！听到未来</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<ul class="tab-menu">
										<li class="active gtco-first"><a href="#" data-tab="signup">注册</a></li>
										<li class="gtco-second"><a href="#2" data-tab="login">登陆</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">邮箱</label><?php echo $emailErr; ?>
														<input type="text" class="form-control" name="email">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">用户名</label><?php echo $nameErr; ?>
														<input type="text" class="form-control" name="username">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">密码</label><?php echo $passwordErr; ?>
														<input type="password" class="form-control" name="password">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password2">重复密码</label><?php echo $repasswordErr; ?>
														<input type="password" class="form-control" name="repassword">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary" value="提交">
														&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
														<input type="reset" class="btn btn-primary" value="重置">
													</div>
													
												</div>
											</form>	
										</div>

										<div class="tab-content-inner" data-content="login">
											<form   method="POST" action="login_ctr.php">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">用户名</label>
														<input type="text" class="form-control" name="username">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">密码</label>
														<input type="password" class="form-control" name="password">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary" value="确定">
													</div>
													
												</div>
											</form>	
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</header>	
	</div>

	</div>
	</body>
    <!-- jQuery -->
	<script src="js/up_jquery.min.js"></script>
	
	<script src="js/up_sign_main.js"></script>

</html>

