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
echo "<font color=black><h4><pre>                                                                                                       welcome,     $var</pre></font></h4>";
?>
<div>
<?php
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
$sql=mysql_query("select * from library_info where username='$var' ");
$numrows1 = mysql_num_rows($sql);
echo "<center><table border='3'>
 <tr>
<th><pre>   Book-No.  </pre></th>
<th><pre>   Book-Name   </pre></th>
<th><pre>  Issued-Date  </pre></th>
<th><pre>Submission-Date</pre></th>
</tr>";
if($numrows1!=0)
{
for($i=0;$i<$numrows1;$i++)
  {
 $row = mysql_fetch_array($sql);
 
  echo "<tr>";
  echo "<td>" . $row['book_no'] . "</td>";
  echo "<td>" . $row['book_name'] . "</td>";
  echo "<td>" . $row['issued_date'] . "</td>";
    echo "<td>" . $row['submission_date'] . "</td>";
  echo "</tr>";

  }

	}
	echo "</table>";
?></div>
</div>
</body>
</html>