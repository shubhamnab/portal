<html>
<style>
#update1{text-align:center;margin-top:0px;margin-left:400px}
</style>
<body>
<?php
include 'student_hm.php';
?>
<div id="update1">
<?php
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
$user=$_POST["user"];
$project_name=$_POST["project_name"];
$team_members=$_POST["team_members"];
$investigator=$_POST["investigator"];
if(($user=="")||($project_name=="")||($team_members=="")||($investigator==""))
{
  echo '<h3>Please fill all entries</h3>';
  exit();
}
$sql=mysql_query("select username from personal_info where username='$user' ");
$result=mysql_num_rows($sql);

   $sql=("insert into student_projects(project_name,team_members,coordinator,username) 
                  values
                ('$project_name','$team_members','$investigator','$user')");
				 if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
    echo '<h3>Information is sucessfully added</h3>';
?>
</div>
</body>
</html>
