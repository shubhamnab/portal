<html>
<style>
table{border-collapse:collapse}
td{text-align:centre;font-size:25px;margin-top:-100px;color:black;margin-left:200px}
img{float:left;margin-left:200px}
h3{text-align:centre;margin-left:200px;color:grey}
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
echo "<font color=white><h4><pre>                                                                                                                                 welcome,     $var</pre></font></h4>";
?>
<div>
<?php
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
$sql=mysql_query("select * from attendence where username='$var' ");
$numrows1 = mysql_num_rows($sql);
echo "<center><table border='3'>
 <tr>
 <th><pre>Username</pre></th>
<th><pre>    Month    </pre></th>
<th><pre>     Present    </pre></th>
<th><pre>  Absent  </pre></th>
<th><pre>  sort  </pre></th>
</tr>";
if($numrows1!=0)
{
for($i=0;$i<$numrows1;$i++)
  {
 $row = mysql_fetch_array($sql);
 
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['month'] . "</td>";
  echo "<td>" . $row['No_attendent'] . "</td>";
  echo "<td>" . $row['No_absent'] . "</td>";
  echo "<td>" . $row['sort'] . "</td>";
  echo "</tr>";

  }

	}
	echo "</table>";
?></div>
</div>
</body>
</html>