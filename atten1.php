<html>
<style>
#add1{text-align:center;margin-top:130px;margin-left:400px}
</style>
<body>
<?php
include 'faculty.php';
?>
<div id="add1">
<?php
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
$user=$_POST["Username"];
$month=$_POST["month"];
$present=$_POST["present"];
$absent=$_POST["absent"];
$sort=$_POST["sort"];
if(($user=="")||($month=="")||($present=="")||($absent=="")||($sort==""))
{
  echo '<h3>Please fill all entries</h3>';
  exit();
}
$sql=mysql_query("select username from personal_info where username='$user' ");
$result=mysql_num_rows($sql);
   $sql=("insert into attendence(username,month,No_attendent,No_absent,sort) 
                  values
                ('$user','$month','$present','$absent','$sort')");
     if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
	echo '<h3>Information is sucessfully added</h3>';
?>
</div>
</body>
</html>
