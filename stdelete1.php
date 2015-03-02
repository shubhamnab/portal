<html>
<style>
#add1{text-align:center;margin-top:-130px;margin-left:400px}
</style>
<body>
<?php
include 'student_hm.php';
?>
<div id="add1">
<?php
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);

$user=$_POST["cid"];

if(($user==""))
{
  echo '<h3>Please fill your original id</h3>';
  exit();
}
   $sql="delete from personal_info where username='$user'";
    if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
	echo '<h3>Information is sucessfully deleted</h3>';
	mysql_close($con);
?>
</div>
</body>
</html>