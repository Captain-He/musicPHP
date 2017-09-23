<?php
  $a=$_GET['a'];
  $b=$_GET['b'];
  $user=$_GET['user'];
  $class=$_GET['class'];
if($_GET['play']=='1'||$_GET['play']=='2'||$_GET['play']=='3'||$_GET['play']=='4')
{
	$singer="张惠妹";
	$which=11;

 $json='var mplayer_song = [[
	    {
	        "basic":true,
	        "name":"播放",
	        "singer":"许嵩",
	        "img":"https://y.gtimg.cn/music/photo_new/T001R300x300M000000CK5xN3yZDJt.jpg"
	    },';
	  for($i=0;$i<6;$i++)
	  {
	  	switch ($i) {
	  		    case '0':
	  			$name="听海";
	  			break;
	  			case '1':
	  			$name="记得";
	  			break;
	  			case '2':
	  			$name="解脱";
	  			break;
	  			case '3':
	  			$name="人质";
	  			break;

	  			case '4':
	  			$name="趁早";
	  			break;
	  			default:
	  			$name="我可以抱你吗";
	  			break;
	  }
	    	$gcurl="listsongs\\".'\\'.$which.".mp3";
			$ccurl="listsongs\\".'\\'.$which.".lrc";
			
			$json.='
			    {'.'"name":"'.$name.'",'.'"singer":"'."张惠妹".'",'.'"img":"https://y.gtimg.cn/music/photo_new/T001R300x300M000000CK5xN3yZDJt.jpg'.'",'.'"src":"'.$gcurl.'",'.'"lrc":"'.$ccurl.'"},';
			$which++;
	    }
	    	$name="我最亲爱的";
	        $gcurl="listsongs\\".'\\'.$which.".mp3";
			$ccurl="listsongs\\".'\\'.$which.".lrc";
			
			$json.='
			    {'.'"name":"'.$name.'",'.'"singer":"'.$singer.'",'.'"img":"https://y.gtimg.cn/music/photo_new/T001R300x300M000000CK5xN3yZDJt.jpg'.'",'.'"src":"'.$gcurl.'",'.'"lrc":"'.$ccurl.'"}';
    
	$json.=']]';
	 
	file_put_contents("play\js\mplayer-list.js", $json);
	header("Location: play/index.php?user=".$user."&a=".$a."&b=".$b."&class=".$class);
	
	exit;
}
?>