<html>
<head>
<script type="text/javascript">
function delete_yn()
{
var r=confirm("确认删除有关该用户的所有记录?删除后无法恢复！");
if (r==true)
  		<?php echo "window.location='delete2.php?"."&username=".$_GET["username"]."';"; ?>
else
  window.location='manage.php';
}
</script>
</head>
<body onload="delete_yn()">
</body>
</html>
