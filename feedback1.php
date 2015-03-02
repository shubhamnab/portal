<html>
<style>
#update1{text-align:center;margin-top:0px;margin-left:400px}
h3{margin-top:-300px}
</style>
<body>
<?php
include 'contact us.html';
?>
<div id="update1">
<?php
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
$use=$_POST["name"];
$projec=$_POST["email"];
$princip=$_POST["feedback"];

if(($use=="")||($projec=="")||($princip==""))
{
  echo '<h3>Please fill all entries</h3>';
  exit();
}


   $sql=("insert into feedback(name,email,feedback) 
                  values
                ('$use','$projec','$princip')");
				 if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
    echo '<h3>feedback is sent successfully</h3>';
?>
</div>
</body>
</html>
