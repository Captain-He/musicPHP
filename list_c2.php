<?php
  $which=$_GET['which'];
  $singer=$_GET['singer'];
  $src=$_GET['src'];
  $a=$_GET['a'];
  $b=$_GET['b'];
  $user=$_GET['user'];
  $class=$_GET['class'];

  
  $json='var mplayer_song = [[
	    {
	        "basic":true,
	        "name":"播放",
	        "singer":"许嵩",
	        "img":"https://y.gtimg.cn/music/photo_new/T001R300x300M000000CK5xN3yZDJt.jpg"
	    },';
    $gcurl="listsongs\\".'\\'.$which.".mp3";
	$ccurl="listsongs\\".'\\'.$which.".lrc";
	
	$json.='
	    {'.'"name":"'.$name.'",'.'"singer":"'.$singer.'",'.'"img":"https://y.gtimg.cn/music/photo_new/T001R300x300M000000CK5xN3yZDJt.jpg'.'",'.'"src":"'.$gcurl.'",'.'"lrc":"'.$ccurl.'"}';
	$json.=']]';
	 
	file_put_contents("play\js\mplayer-list.js", $json);
	header("Location: play/index.php?user=".$user."&a=".$a."&b=".$b."&class=".$class);
	
	exit;
?>
?>