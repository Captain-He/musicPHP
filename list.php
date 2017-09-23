<?php
	$a=$_GET['a'];
	$name=$_GET['name'];
	$class=$_GET['class'];
	$b=$_GET['b'];
	header("location:first.php?a=".$a."&name=".$name."&class=".$class."&b=".$b);
	exit;
?>