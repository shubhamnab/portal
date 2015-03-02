<html>
<style>
#update1{text-align:center;margin-top:0px;margin-left:400px}
</style>
<body>
<?php
include 'faculty_hm.php';
?>
<div id="update1">
<?php
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
$user=$_POST["user"];
$project1=$_POST["project"];
$principal=$_POST["principal"];
$sponsoring=$_POST["sponsoring"];
$outlay=$_POST["outlay"];
if(($user=="")||($project1=="")||($sponsoring=="")||($principal=="")||($outlay==""))
{
  echo '<h3>Please fill all entries</h3>';
  exit();
}
$sql=mysql_query("select username from faculty_info where username='$user' ");
$result=mysql_num_rows($sql);

   $sql=("insert into faculty_projects(project_name,principal_investigator,sponsoring_agency,outlay_in_lacs,username) 
                  values
                ('$project1','$sponsoring','$principal','$outlay','$user')");
				 if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
    echo '<h3>Information is sucessfully added</h3>';
?>
</div>
</body>
</html>
