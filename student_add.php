<html>
<style>
#student_add{margin-right:-200px;margin-top:00px;font-size:23px;color:yellow;text-align:right}
</style>
<body>
<?php
include 'student_hm.php';
?>
<div id="student_add">
<marquee><font size='4' face="TEMPUS SANS ITC" color="crimson">Register Yourself Now</marquee>
<center>
<h1><font face="TEMPUS SANS ITC" color="CornflowerBlue">Student Registration Form</font></h1>
<font face="TEMPUS SANS ITC" color="#000000" >
<table border="0" cellspacing="10">
<form action="student_add1.php" method="post" >
<tr>
<td>First Name: <td><input type="text" name="fn"><td>Last Name: <td><input type="text" name="ln"><br>
<tr><td>College Id:<td><input type="text" name="cid"><br>
<tr><td>Password:<td><input type="password" name="pwd"><br>
<tr>
<td>Date  Of  Birth:  <td><input type="date" name="Date"><td><br>
<tr>
<td>Category:<br>
<td><input type="radio" name="cat" value="gen">General<br>
<input type="radio" name="cat" value="sc">SC<br>
<input type="radio" name="cat" value="st">ST<br>
<input type="radio" name="cat" value="other">Other<br>
<tr>
<td>Sex:<br>
<td><input type="radio" name="sex" value="male">Male<br>
<input type="radio" name="sex" value="female">Female<br>
<tr>
<td>Email Id: <td><input type="text" name="id">
<tr>
<td>AIEEE RANK:<td><input type="text" name="rank">
<tr>
<td>Mother's Name: <td><input type="text" name="mname"><td>Mother's Phone No.:<td><input type="text" name="mph">
<tr>
<td>Father's Name: <td><input type="text" name="fname"><td>Father's Phone No.:<td><input type="text" name="fph">
<tr>
<td>Temporary Address:<td><textarea name="address" rows="1" cols="20"></textarea>
<tr>
<td>Permanent Address:<td><textarea name="paddress" rows="1" cols="20"></textarea>
<tr>
</table><br>
<button type="submit" name="submit" value="Submit">Submit</button>
</form>

</center>
</form>
</div>
</body>
</html>