<html>
<style>
#td1{color:black;margin-left:00px;margin-top:20px}
body{background-image:url(shining-again.jpg)}
table{border-collapse:collapse}
div{background-image:url(.jpg);color:white;border:2px;margin-left:80px;margin-top:50px}
h3{color:black}
tr{margin-left:1000px}
img{float:left;margin-left:200px}
h4{text-align:centre;margin-left:200px;color:grey;margin-top:10px}
a{font-family:arial;color:white;text-decoration:none}
</style>
<body>
<?php
include 'student.php';
?>
<?php
include 'include.php';
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
echo "<font color=white><h4><pre>                                                                                                       welcome,     $var</pre></font></h4>";
?>
<div>
<?php
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
$sql=mysql_query("select * from personal_info where username='$var'");
echo "<center><table border='3'>  <tr><td>";
echo "<center><table border='1'> <tr>";
$numrows1 = mysql_num_rows($sql);
if($numrows1!=0)
{
for($i=0;$i<$numrows1;$i++)
  {
 $row = mysql_fetch_array($sql);
 {
  echo '<td><h3>Name:-<td id="td1">'.$row['fname'].'</h3>';
  echo '<tr><td><h3>DOB:-<td id="td1">'.$row['Date_of_Birth'].'</h3>';
  echo '<tr><td><h3>Father Name:-<td id="td1">'.$row['father_name'].'</h3>';
  echo '<tr><td><h3>Mother Name:-<td id="td1">'.$row['mother_name'];
  echo '<tr><td><h3>Address:-<td id="td1">'.$row['address'];
  echo '<tr><td><h3>Category:-<td id="td1">'.$row['Category'];
  echo '<tr><td><h3>Email:-<td id="td1">'.$row['Email'];
  echo '<tr><td><h3>AIEEE Rank:-<td id="td1">'.$row['AIEEE_Rank'];
  }
  }
 }
?></div>
</body>
</html>