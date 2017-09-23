<?php
echo $_GET['button'];
if($_GET['button']=='1')
{
	$singer="张惠妹";
	$which=11;
}
 $json='var mplayer_song = [[
	    {
	        "basic":true,
	        "name":"播放",
	        "singer":"许嵩",
	        "img":"https://y.gtimg.cn/music/photo_new/T001R300x300M000000CK5xN3yZDJt.jpg"
	    },';
	    for($i=0;$i<8;$i++)
	    {
	    	switch ($which) {
	    		case '11':
	    			$name="ssss1";
	    			break;
	    		case '12':
	    			$name="sssss2";
	    			break;
	    		default:
	    			$name="ssssss4";
	    			break;
	    	}
	    	$gcurl="listsongs\\".'\\'.$which.".mp3";
			$ccurl="listsongs\\".'\\'.$which.".lrc";
			
			$json.='
			    {'.'"name":"'.$name.'",'.'"singer":"'.$singer.'",'.'"img":"https://y.gtimg.cn/music/photo_new/T001R300x300M000000CK5xN3yZDJt.jpg'.'",'.'"src":"'.$gcurl.'",'.'"lrc":"'.$ccurl.'"},';
			$which++;
	    }
	        $gcurl="listsongs\\".'\\'.$which.".mp3";
			$ccurl="listsongs\\".'\\'.$which.".lrc";
			
			$json.='
			    {'.'"name":"'.$name.'",'.'"singer":"'.$singer.'",'.'"img":"https://y.gtimg.cn/music/photo_new/T001R300x300M000000CK5xN3yZDJt.jpg'.'",'.'"src":"'.$gcurl.'",'.'"lrc":"'.$ccurl.'"}';
    
	$json.=']]';
	 
	file_put_contents("play\js\mplayer-list.js", $json);
	header("Location: play/index.html");
	
	exit;
?>