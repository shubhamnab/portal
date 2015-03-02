<html>
<style>
#add1{text-align:center;margin-top:130px;margin-left:400px}
</style>
<body>
<?php
include 'admin_home.php';
?>
<div id="add1">
<?php
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
$atofac=$_POST["notice"];
$id=$_POST["id"];
   $sql=("insert into notice(adtofac,facid) 
                  values
                ('$atofac','$id')");
     if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
	echo '<h3>Information is sucessfully added</h3>';
?>
</div>
</body>
</html>
