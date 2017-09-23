
<?php
	 error_reporting(0); 
	 date_default_timezone_set("PRC");
	 $value= $_GET['searchin'];

	 if($value=='')
		$value="海阔天空";
	 $curl="http://route.showapi.com/213-1?showapi_appid=43280&showapi_sign=64b617f258a64415a421bf6578659616&keyword=".$value."&page=1&";
	 $cont=file_get_contents($curl);
	
	 $pieces = explode('{', $cont);
	 
	 $array1=array($pieces[4] ,$pieces[5] ,$pieces[6],$pieces[7] ,$pieces[8] ,$pieces[9] ,$pieces[10] ,$pieces[11] ,$pieces[12] ,$pieces[13] ,$pieces[14],$pieces[15] ,$pieces[16] ,$pieces[17] ,$pieces[18] ,$pieces[19] );
	  $json='var mplayer_song = [[
	    {
	        "basic":true,
	        "name":"搜索结果",
	        "singer":"许嵩",
	        "img":"https://y.gtimg.cn/music/photo_new/T001R300x300M000000CK5xN3yZDJt.jpg"
	    },';
	for($q=0;$q<9;$q++)
	{
    $pieces = explode('"', $array1[$q]);
    $pieces[10] = substr($pieces[10],1); 
    $pieces[10]=substr($pieces[10], 0, -1);

	$curl="http://lp.music.ttpod.com/lrc/down?artist=陈奕迅"."&title=".$value."&code=<CODE>";
	$cont=file_get_contents($curl);
	$pi = explode('"', $cont);
	$json.='
	    {'.'"name":"'.$pieces[27].'",'.'"singer":"'.$pieces[23].'",'.'"img":"'.$pieces[43].'",'.'"src":"'.$pieces[3].'",'.'"lrc":"'.$pi[7].'"},';
     }

     $pieces = explode('"', $array1[9]);
    $pieces[10] = substr($pieces[10],1); 
    $pieces[10]=substr($pieces[10], 0, -1);

	$curl="http://lp.music.ttpod.com/lrc/down?artist=陈奕迅"."&title=".$value."&code=<CODE>";
	$cont=file_get_contents($curl);
	$pi = explode('"', $cont);
	$json.='
	    {'.'"name":"'.$pieces[27].'",'.'"singer":"'.$pieces[23].'",'.'"img":"'.$pieces[43].'",'.'"src":"'.$pieces[3].'",'.'"lrc":"'.$pi[7].'"}';
	  $json.=']]';
	 
	
	file_put_contents("js\mplayer-list.js", $json);
	$a=file_get_contents('../boom.php');
	$pieces = explode(';', $a);
	var_dump($pieces);
	$user=$pieces[0];
	$class=$pieces[3];
	$a=$pieces[1];
	$b=$pieces[2];

	header( "Location: index.php?a=".$a."&b=".$b."&user=".$user."&class=".$class);
	//确保重定向后，后续代码不会被执行
	exit;
	?>
