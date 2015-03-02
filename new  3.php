<?php
include 'include.php';
$con=mysql_connect("localhost","root","");
mysql_select_db("portal",$con);
$sql=mysql_query("select * from personal_info where username='$var' ");
while($row = mysql_fetch_array($sql))
 {
  echo '<h2>first_name:-</h2>';
  echo $row['first_name'];
  echo "<br>";
  echo '<h2>middle_name:-';
  echo $row['middle_name'];
  echo "<br>";
  echo '<h2>last_ame:-';
  echo $row['last_name'];
  echo "<br>";
  echo '<h2>Date_of-Birth:-';
  echo $row['Date_of_Birth'];
  echo "<br>";
  echo '<h2>father_name:-';
  echo $row['father_name'];
  echo "<br>";
  echo '<h2>mother_name:-';
  echo $row['mother_name'];
  echo "<br>";
 }

?>