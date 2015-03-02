<html>
<style>
#td1
{
color:white;


}
body{background-image:url(shining-again.jpg)}
div{background-image:url(.jpg);color:white;border="1";margin-left:80px}
h2{text-align:center;margin-top:100px;font-size:30px;margin-left:80px;color:white}
h3{color:white}
h5{color:mintcream;margin-left:100px;font-size:20px}
img{float:left;margin-left:200px;margin-top:-80px}
th{text-align:centre;font-size:25px;margin-top:-150px;color:white}
img{float:left;margin-left:200px}
h4{text-align:centre;margin-left:200px;color:grey}
a{font-family:arial;color:white;text-decoration:none}
.bank{
float:left;
}
</style>
<body>
<h2><b>MALAVIYA NATIONAL INSTITUTE OF TECHNOLOGY</b></h2>
<img src="mnit_logo.png">
<table border="1" style="background-image:url('12.jpg');margin-left:350px;margin-top:80";color:white>
<th><a href="3.html"> Home</a></th>
<th><a href="new.php">Student Information</a></th>
<th><a href="s_lab_info.php">Library information</a></th>
<th><a href="s_result.php">Result</a></th>
<th><a href="contact us.html">Contact us</a></th>
<th><a href="1.html">Log Out</a></th>
</table>
<h4>welcome,</h4>
<h5>Personal-Information</h5>
<div>
<?php
include 'include.php';
$con=mysql_connect("localhost","root","");
mysql_select_db("portal",$con);
$sql=mysql_query("select * from personal_info where username='$var' ");
echo "<table border='1'> <tr>";
while($row = mysql_fetch_array($sql))
 {
  echo '<td><h3>Name:-<td id="td1">'.$row['name'].'</h3>';
  echo '<tr><td><h3>DOB:-<td id="td1">'.$row['Date_of_Birth'].'</h3>';
  echo '<tr><td><h3>Father Name:-<td id="td1">'.$row['father_name'].'</h3>';
  echo '<tr><td><h3>Mother Name:-<td id="td1">'.$row['mother_name'];
  echo '<tr><td><h3>Address:-<td id="td1">'.$row['address'];
  echo '<tr><td><h3>Category:-<td id="td1">'.$row['Category'];
  echo '<tr><td><h3>Email:-<td id="td1">'.$row['Email'];
  echo '<tr><td><h3>AIEEE Rank:-<td id="td1">'.$row['AIEEE_Rank'];

  
 
  
 }
 echo"<div id='bank'>
<table border=3>
<td><h3>Bank-Name:-<td id="td1">.$row['Bank_name'].</h3>
</td></table>
</div>";
?></div>

</body>
</html>