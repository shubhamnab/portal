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
$user=$_POST["user"];
$name=$_POST["name"];
$id=$_POST["id"];
$dept=$_POST["dept"];
$position=$_POST["position"];
$phone=$_POST["phone"];
$fax=$_POST["fax"];
$email=$_POST["email"];
if(($user=="")||($name=="")||($id=="")||($dept=="")||($position=="")||($email=="")||($fax=="")||($phone==""))
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
   $sql=("insert into faculty_info(name,id,Departments,position,phone_no,fax_no,email,username) 
                  values
                ('$name','$id','$dept','$position','$phone','$fax','$email','$user')");
     if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
	echo '<h3>Information is sucessfully added</h3>';
?>
</div>
</body>
</html>
