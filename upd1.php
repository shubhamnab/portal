<html>
<style>
#add1{text-align:center;margin-top:-130px;margin-left:400px}
h3{margin-top:200px}
</style>
<body>
<?php
include 'faculty.php';
?>
<div id="add1">
<?php
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
$user=$_POST["cid"];
$degi=$_POST["deg"];
$q=$_POST["qua"];
$email=$_POST["id"];
$mob=$_POST["mobile"];
if(($user==""))
{
  echo '<h3>Please fill your original id</h3>';
  exit();
}
 if($degi!="")
{
   $sql2="update faculty_info set position='$degi'  where username='$user'";
    if (!mysql_query($sql2))
  {
  die('Error: ' . mysql_error());
  }
 }
 if($q!="")
{
   $sql3="update faculty_info set qualification='$q'  where username='$user'";
    if (!mysql_query($sql3))
  {
  die('Error: ' . mysql_error());
  }
 }
 if($email!="")
{
   $sql4="update faculty_info set email_id='$email'  where username='$user'";
    if (!mysql_query($sql4))
  {
  die('Error: ' . mysql_error());
  }
 }
 if($mob!="")
{
   $sql6="update faculty_info set mobile='$mob'  where username='$user'";
    if (!mysql_query($sql6))
  {
  die('Error: ' . mysql_error());
  }
 }
	echo '<h3>Information is sucessfully updated</h3>';
	mysql_close($con);
?>
</div>
</body>
</html>