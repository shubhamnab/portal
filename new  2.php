<html>
<style>
#td1{color:white;margin-left:00px;margin-top:20px}
body{background-image:url(shining-again.jpg)}
table{border-collapse:collapse}
div{background-image:url(.jpg);color:white;border:2px;margin-left:80px;margin-top:50px}
h2{text-align:center;margin-top:100px;font-size:30px;margin-left:80px;color:white}
h3{color:white}
tr{margin-left:1000px}
h5{}
img{float:left;margin-left:200px;margin-top:-80px}
th{text-align:centre;font-size:25px;margin-top:-100px;color:white}
img{float:left;margin-left:200px}
h4{text-align:centre;margin-left:200px;color:grey;margin-top:10px}
a{font-family:arial;color:white;text-decoration:none}
</style>
<body>
<h2><b>MALAVIYA NATIONAL INSTITUTE OF TECHNOLOGY</b></h2>
<img src="mnit_logo.png">
<?php
include 'include.php';
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
echo "<font color=white><h4><pre>                                                                                                       welcome,     $var</pre></font></h4>";
?>
<table border="3" style="background-image:url('12.jpg');margin-left:80px;margin-top:40";color:white;>
<th><a href="3.html"><pre> Home </pre></a></th>
<th><a href="new.php"><pre> Student Information </pre></a></th>
<th><a href="s_lab_info.php"><pre> Library information </pre></a></th>
<th><a href="s_result.php"><pre> Result </pre></a></th>
<th><a href="s_projects.php"><pre> Projects </pre></a></th>
<th><a href="1.html"><pre> Log Out </pre></a></th>
</table>
<div>
<?php
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
$sql=mysql_query("select * from personal_info where username='$var'");
$numrows1 = mysql_num_rows($sql);
echo "<center><table border='3'>
 <tr>
 <th><pre>Name:</pre></th>
<th><pre>    DOB    </pre></th>
<th><pre>     FATHER NAME    </pre></th>
<th><pre>  MOTHER NAME  </pre></th>
<th><pre>  ADDRESS  </pre></th>
<th><pre>  CATEGORY  </pre></th>
</tr>";
if($numrows1!=0)
{
for($i=0;$i<$numrows1;$i++)
  {
 $row = mysql_fetch_array($sql);
 
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['Date_of_Birth'] . "</td>";
  echo "<td>" . $row['father_name'] . "</td>";
  echo "<td>" . $row['mother_name'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['Category'] . "</td>";
  echo "</tr>";

  }

	}
	echo "</table>";
?></div>
</body>
</html>