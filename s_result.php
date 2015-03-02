<html>
<style>
td{text-align:centre;font-size:25px;margin-top:100px;color:black;margin-left:200px}
img{float:left;margin-left:200px}
table{border-collapse:collapse}
a{font-family:arial;color:black;text-decoration:none}
#table
{
font-size:10px;
font-color:black;
}
</style>
<body>
<?php
include 'student.php';
?>
<?php
include 'include.php';
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
echo "<font color=black><h4><pre>                                                                                                                                     welcome,     $var</pre></font></h4>";
?>
<?php
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
$sql=mysql_query("select * from result where username='$var'");
$numrows1 = mysql_num_rows($sql);
echo "<center><table border='1'>
<tr>
<th><pre>      Semester      </pre></th>
<th><pre>      CGPA          </pre></th>
<th><pre>      SGPA          </pre></th>
</tr>";
if($numrows1!=0)
{
for($i=0;$i<$numrows1;$i++)
  {
 $row = mysql_fetch_array($sql);
 
  echo "<tr>";
  echo "<td>" . $row['Semester'] . "</td>";
  echo "<td>" . $row['CGPA'] . "</td>";
  echo "<td>" . $row['SGPA'] . "</td>";
  echo "</tr>";

  }

	}
	echo "</table>";
?>
</div>
</body>
</html>