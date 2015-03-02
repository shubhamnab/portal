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
$fname=$_POST["fn"];
$lname=$_POST["ln"];
$user=$_POST["cid"];
$pass=$_POST["pwd"];
$dob=$_POST["Date"];
$category=$_POST["cat"];
$gender=$_POST["sex"];
$email=$_POST["id"];
$mother_name=$_POST["mname"];
$father_name=$_POST["fname"];
$mother_phone=$_POST["mph"];
$father_phone=$_POST["fph"];
$rank=$_POST["rank"];
$address=$_POST["address"];
$paddress=$_POST["paddress"];
if(($user=="")||($fname=="")|| ($lname=="")||($dob=="")||($email=="")|| ($pass=="")||($gender=="")||($rank=="")||($category=="")||($address=="")||($father_name=="")||($mother_name==""))
{
  echo '<h3>Please fill all entries</h3>';
  exit();
}
$sql=mysql_query("select username from personal_info where username='$user' ");
$result=mysql_num_rows($sql);
if($result!=0)
{  echo "<h3>Username already exists</h3>";
   exit();
   }
   $sql="insert into personal_info (fname,lname,Date_of_Birth,Email,Gender,AIEEE_Rank,Category,username,address,paddress,mother_phone,father_phone,father_name,mother_name) 
                  values
                ('$fname','$lname','$dob','$email','$gender','$rank','$category','$user','$address','$paddress','$mother_phone','$father_phone','$father_name','$mother_name')";
	$sql1="insert into security (username,password) values ('$user','$pass')";			
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
