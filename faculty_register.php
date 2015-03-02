<html>
<style>
#faculty_add{margin-right:-200px;margin-top:00px;font-size:23px;color:yellow;text-align:right}
</style>
<body>
<?php
include 'faculty_hm.php';
?>
<div id="faculty_add">
<marquee><font size='4' face="TEMPUS SANS ITC" color="crimson">Register Yourself Now</marquee>
<center>
<h1><font face="TEMPUS SANS ITC" color="CornflowerBlue">Faculty Registration Form</font></h1>
<font face="TEMPUS SANS ITC" color="#000000" >
<table border="0" cellspacing="10">
<form action="facultyadd1.php" method="post" >
<tr>
<td>First Name: <td><input type="text" name="fn"><td>Last Name: <td><input type="text" name="ln"><br>
<tr><td>Faculty Id:<td><input type="text" name="cid"><br>
<tr><td>Password:<td><input type="password" name="pwd"><br>
<tr><td>Department:<td><input type="text" name="dep"><br>
<tr>
<td>Designation:<td>
<select name="deg">
  <option value="hod">HOD</option>
  <option value="professor">Professor</option>
  <option value="asso.professor">Asso. Professor</option>
  <option value="assi.professor">Assi. Professor</option>
  <option value="guestfaculy">Faculty</option>
</select><br>
<tr>
<td>Date  Of  Birth:  <td><input type="date" name="Date"><td><br>
<tr>
<tr>
<td>Qualifications: <td><input type="text" name="qua">
<tr>
<td>Email Id: <td><input type="email" name="id">
<tr>
<tr>
<td>Address:<td><textarea name="address" rows="1" cols="20"></textarea>
<tr>
<td>Mobile No:<td><input type="text" name="mobile" >
<tr>
<td>Fax No:<td><input type="text" name="fax">
<tr>
</table><br>
<button type="submit" name="submit" value="Submit">Submit</button>
</form>

</center>
</form>
</div>
</body>
</html>