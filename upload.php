

<html>
	<head>
	<meta charset="utf-8">	
	<title>Home</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	
	<link rel="stylesheet" href="css2/bootstrap.css">	

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css2/owl.carousel.min.css">
	<link rel="stylesheet" href="css2/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css2/sign_style.css">
	</head>
	<body>
	<style>
		.gtco-container{
			position: absolute;
			top: 100px;
		}
	
		.up{
			position: absolute;
			top: 150px;
			left: 450px;
		}

	</style>

	<div class="page-inner">	
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-color:#363535">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
						<table  align = "center" border = "0" width = "960" style="text-align: center;">
							<tr>
								<td colspan="4">欢迎你<?php echo $user=$_GET['user'];?></td>
							</tr>
						</table>

					<form class="up" action=<?php echo "upload_file.php?user=".$_GET['user'];?> method="post" enctype="multipart/form-data">
						<label for="file">文件名：</label>
						<input type="file" name="file" ><br />
						<label for="file">歌手：</label><br />
						<input type="text" name="singer"  style="width: 280px;"><br />
						<br />
						<input type="submit" name="submit" value="提交">
					</form>


					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">欢迎 来到网易云音乐</span>
							<h1>听见生活！听到未来</h1>	
						</div>
						
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</header>	
	</body>
    <!-- jQuery -->
	<script src="js/up_jquery.min.js"></script>
	
	<script src="js/up_sign_main.js"></script>

