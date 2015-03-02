<html>
<body>
<?php
include 'faculty.php';
?>
<?php
include 'include.php';
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
echo "<font color=white><h4><pre>                                                                                                                             welcome,     $var</pre></font></h4>";
?>
<h3>
<div>
<?php
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
$sql=mysql_query("select * from faculty_info where username='$var'");
echo "<center><table border='0'> <tr><td>";
echo "<center><table border='1'> <tr>";
while($row = mysql_fetch_array($sql))
 {
  echo '<td><h3>Name:-<td id="td1">'.$row['fname'].'</h3>';
  echo '<tr><td><h3>Faculty-ID:-<td id="td1">'.$row['username'].'</h3>';
  echo '<tr><td><h3>Department:-<td id="td1">'.$row['Departments'].'</h3>';
  echo '<tr><td><h3>Designation:-<td id="td1">'.$row['position'];
  echo '<tr><td><h3>Qualification:-<td id="td1">'.$row['qualification'];
  echo '<tr><td><h3>Email:-<td id="td1">'.$row['email_id'];
  echo '<tr><td><h3>Mobile No:-<td id="td1">'.$row['mobile'];
  echo '<tr><td><h3>Fax No::-<td id="td1">'.$row['fax'];
  
  }
?></div>
</body>
</html>