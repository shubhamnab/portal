<html>
<style>
#update1{text-align:center;margin-top:0px;margin-left:400px}
</style>
<body>
<?php
include 'student_hm.php';
?>
<div id="update1">
<?php
$con=mysql_connect("localhost","root","44422");
mysql_select_db("portal",$con);
$user=$_POST["user"];
$book_name=$_POST["book_name"];
$book_no=$_POST["book_no"];
$issued_date=$_POST["issued_date"];
$submission_date=$_POST["submission_date"];
if(($user=="")||($book_name=="")||($book_no=="")||($issued_date=="")||($submission_date==""))
{
  echo '<h3>Please fill all entries</h3>';
  exit();
}
$sql=mysql_query("select username from personal_info where username='$user' ");
$result=mysql_num_rows($sql);

   $sql=("insert into library_info(book_name,book_no,issued_date,submission_date,username) 
                  values
                ('$book_name','$book_no','$issued_date','$submission_date','$user')");
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
    echo '<h3>Information is sucessfully added</h3>';
?>
</div>
</body>
</html>
