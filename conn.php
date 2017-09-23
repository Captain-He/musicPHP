
<?php
	
	$online = @mysql_connect("localhost","root","");

	mysql_select_db("user",$online);

	mysql_query("set names utf8");

?>

