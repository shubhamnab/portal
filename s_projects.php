<html>
<style>
#background{background-color:white;min-height: 100px;max-width:1000px;margin-left:170px}
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
$sql=mysql_query("select * from student_projects where username='$var' ");
$numrows1 = mysql_num_rows($sql);
echo "<center><table border='3'>
 <tr>
 <th><pre>S.No.</pre></th>
<th><pre>    Project-Name    </pre></th>
<th><pre>     Team-Members    </pre></th>
<th><pre>  Co-Ordinator  </pre></th>
</tr>";
if($numrows1!=0)
{
for($i=0;$i<$numrows1;$i++)
  {
 $row = mysql_fetch_array($sql);
 
  echo "<tr>";
  echo "<td>" . $row['serial'] . "</td>";
  echo "<td>" . $row['project_name'] . "</td>";
  echo "<td>" . $row['team_members'] . "</td>";
  echo "<td>" . $row['coordinator'] . "</td>";
  echo "</tr>";

  }

	}
	echo "</table>";
?></div>
</div>
</body>
</html>