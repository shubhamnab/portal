<html>
<style>
#add1{text-align:center;margin-top:-130px;margin-left:400px}
</style>
<body>
<?php
include 'faculty_hm.php';
?>
<div id="add1">
<?php
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
$fname=$_POST["fn"];
$lname=$_POST["ln"];
$user=$_POST["cid"];
$pass=$_POST["pwd"];
$depart=$_POST["dep"];
$degi=$_POST["deg"];
$dob=$_POST["Date"];
$q=$_POST["qua"];
$email=$_POST["id"];
$address=$_POST["address"];
$mob=$_POST["mobile"];
$fax=$_POST["fax"];
if(($user=="")||($fname=="")|| ($lname=="")||($dob=="")||($email=="")|| ($pass=="")||($address==""))
{
  echo '<h3>Please fill all entries</h3>';
  exit();
}
$sql=mysql_query("select username from faculty_info where username='$user' ");
$result=mysql_num_rows($sql);
if($result!=0)
{  echo "<h3>Username already exists</h3>";
   exit();
   }
   $sql="insert into faculty_info (username,fname,lname,Departments,position,Date_of_birth,qualification,email_id,address,mobile,fax) 
                  values
                ('$user','$fname','$lname','$depart','$degi','$dob','$q','$email','$address','$mob','$fax')";
	$sql1="insert into faculty_security (username,password) values ('$user','$pass')";
    if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
   if (!mysql_query($sql1))
  {
  die('Error: ' . mysql_error());
  }
	echo '<h3>Information is sucessfully added</h3>';
	mysql_close($con);
?>
</div>
</body>
</html>
