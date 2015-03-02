<?php
session_start();
?>
<html>
<style>
#add1{text-align:center;margin-top:130px;margin-left:400px}
</style>
<body>
<?php
include 'faculty_hm.php';
?>
<div id="add1">
<?php
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
$old=$_POST["old"];
$new=$_POST["new"];
if(($old=="")||($new==""))
{
  echo '<h3>Please fill all entries</h3>';
  exit();
}
$sql=mysql_query("update security set password='$new' where password='$old'");
	echo '<h3>Password is sucessfully Changed</h3>';
?>
</div>
</body>
</html>
