<html>
<style>
#add{text-align:right;margin-right:450px;margin-top:50px;font-size:23px;color:CornflowerBlue}
</style>
<body>
<?php
include 'student_hm.php';
?>
<div id="add">
<form action="result_add1.php" method="POST">
Username:<input type="text" name ="user"><br><br>
Semester:<input type="text" name="Semester"><br><br>
SGPA:<input type="text" name="SGPA"><br><br>
CGPA:<input type="text" name="CGPA"><br><br>
<input type="submit" name="submit" value="submit" />
</form>
</div>
</body>
</html>