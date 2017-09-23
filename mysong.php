
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
<?php
error_reporting(0);
	include "backstage\page.cless.php";
	include("conn.php");

	$a=file_get_contents('boom.php');
	$pieces = explode(';', $a);
	
	$user=$pieces[0];
	$class=$pieces[3];
	$a=$pieces[1];
	$b=$pieces[2];

	

	$outcome= mysql_query("SELECT * FROM store where user="."'".$user."'",$online);
	$total = mysql_num_rows($outcome);
	$num = 10;
	$page = new Page($total,$num,"");
	$sql = "select * from store where user ="."'".$user."'"." {$page->limit}";
	$outcome = mysql_query($sql);
	echo '<table align = "center" border = "1" width = "100%"  style="text-align: center;">';
	echo '<tr>';
	echo "<td>"."我的收藏"."</td>";
	echo "</tr>";
	echo '<tr>';
	echo "<td>"."歌曲名"."</td>";
	echo "<td>"."歌手"."</td>";
	echo "<td>"."添加时间"."</td>";
	echo "<td>"."操作"."</td>";
	echo "<td>"."播放"."</td>";
	echo "</tr>";
	while($sql = mysql_fetch_array($outcome))
	{
			echo "<tr>";
			echo "<td>".$sql['name']."</td>";
			echo "<td>".$sql['singer']."</td>";
			echo "<td>".$sql['time']."</td>";
			echo "<td>"."<a href="."\""."delete_song.php?"."user=".$sql['user']."&which=".$sql['which']."\"".">&nbsp;&nbsp;删除&nbsp;</a>";
			echo "<td>"."<a href="."\""."list_c.php?"."user=".$sql['user']."&which=".$sql['which']."&name=".$sql['name']."&singer=".$sql['singer']."&a=".$a."&class=".$class."&b=".$b."\"".">&nbsp;&nbsp;播放&nbsp;</a>";
			echo "</tr>";
	   
		
	}

	echo "<tr><td colspan = \"9\" align = \"center\">".$page->fpage(array(3,4,5,8,6,7,2,0,))."</td></tr>";
	
	echo "</table>";

	echo'<br />';
	echo'<br />';
	echo'<br />';
	echo'<br />';
	echo'<br />';
	$outcome= mysql_query("SELECT * FROM music where whoup="."'".$user."'",$online);
	$total = mysql_num_rows($outcome);
	$num = 10;
	$page = new Page($total,$num,"");
	$sql = "select * from music where whoup ="."'".$user."'"." {$page->limit}";
	$outcome = mysql_query($sql);
	echo '<table align = "center" border = "1" width = "100%"  style="text-align: center;">';
	echo '<tr >';
	echo "<td>"."我的上传"."</td>";
	echo "</tr>";
		echo '<tr>';
	echo "<td>"."歌曲名"."</td>";
	echo "<td>"."歌手"."</td>";
	echo "<td>"."添加时间"."</td>";
	echo "<td>"."操作"."</td>";
	echo "<td>"."播放"."</td>";
	echo "</tr>";
	while($sql = mysql_fetch_array($outcome))
	{
			echo "<tr>";
			echo "<td>".$sql['musicname']."</td>";
			echo "<td>".$sql['singer']."</td>";
			echo "<td>".$sql['time']."</td>";
			echo "<td>"."<a href="."\""."delete_upsong.php?"."user=".$sql['whoup']."&which=".$sql['musicname']."\"".">&nbsp;&nbsp;删除&nbsp;</a>";
			echo "<td>"."<a href="."\""."list_c2.php?"."user=".$sql['whoup']."&which=".$sql['musicname']."&src=".$sql['src']."&singer=".$sql['singer']."&a=".$a."&class=".$class."&b=".$b."\"".">&nbsp;&nbsp;播放&nbsp;</a>";
			echo "</tr>";
	   
		
	}

	echo "<tr><td colspan = \"9\" align = \"center\">".$page->fpage(array(3,4,5,8,6,7,2,0,))."</td></tr>";
	
	echo "<tr><td colspan = \"9\" align =\"center\" ><a href="."first.php?"."name=".$user."&class=".$class."&a=".$a."&b=".$b.">返回界面</a></td></tr>";
	echo "</table>";


?>

					
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

</html>

