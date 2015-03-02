<?php
session_start();
?>
<html>
<style type=text/css>
body{background-color:brown};
a{color:yellow;}
</style>
<body>
<?php
if(isset($_POST['submit'])){
$con = mysql_connect("localhost","root","44422");
if(!$con)
{
echo "Database Can Not Be Connected".mysql_error();
}
mysql_select_db("portal",$con);
$myusername=$_POST["username"];
$mypassword =$_POST["password"];
$result=mysql_query("SELECT * FROM security WHERE username='$myusername' and password='$mypassword'");
$count=mysql_num_rows($result);
if($count==1){
$_SESSION['user']=$myusername;
$_SESSION['pass']=$mypassword;
echo $_SESSION['user'];
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}}
?>
</body>
</html>
