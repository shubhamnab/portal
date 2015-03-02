<html>
<style>
#td1{color:black;margin-left:00px;margin-top:20px;width:500px;height:200px}
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
include 'index.php';
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
$sql=mysql_query("select adtost from notice where adtofac='' && factost=''");
echo "<center><table border='1'>  <tr><td>";
echo "<center><table border='1'> <tr>";
$numrows1 = mysql_num_rows($sql);
if($numrows1!=0)
{
for($i=0;$i<$numrows1;$i++)
  {
 $row = mysql_fetch_array($sql);
 {
  echo '<tr style="background-color:white"><td id="td1">'.$row['adtost'].'</h3>';
  }
  }
 }
?></div>
</body>
</html>