<html>
<style>
body{background-image:url(new.jpg)}
h2{text-align:center;margin-top:100px;font-size:30px;margin-left:80px;color:white}
div{color:white;border:2px;margin-left:20px;margin-top:50px}
img{float:left;margin-left:200px;margin-top:-80px}

img{float:left;margin-left:200px}
h3{text-align:centre;margin-left:200px;color:grey}
a{font-family:arial;color:white;text-decoration:none}
</style>
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

<div>
<?php

$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
$sql=mysql_query("select * from faculty_projects where username='$var' ");
$numrows1 = mysql_num_rows($sql);
echo "<center><table border='3'>
 <tr>
<th><pre>   Project-Name   </pre></th>
<th><pre> Project-Investigator </pre></th>
<th><pre> Sponsoring-Agency </pre></th>
<th><pre> Outlay(in lacs) </pre></th>
</tr>";
if($numrows1!=0)
{
for($i=0;$i<$numrows1;$i++)
  {
 $row = mysql_fetch_array($sql);
 
  echo "<tr>";
  echo "<td>" . $row['project_name'] . "</td>";
  echo "<td>" . $row['principal_investigator'] . "</td>";
  echo "<td>" . $row['sponsoring_agency'] . "</td>";
    echo "<td>" . $row['outlay_in_lacs'] . "</td>";
  echo "</tr>";

  }

	}
	echo "</table>";
?></div>
</body>
</html>