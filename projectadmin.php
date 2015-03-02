<html>
<style>
#add{text-align:right;margin-right:400px;margin-top:50px;font-size:23px;color:"harrington"}
</style>
<body>
<?php
include 'faculty_hm.php';
?>
<div id="add">
<form action="update1.php" method="POST">
Username:<input type="text" name ="user"><br><br>
Project name:<input type="text" name="project"><br><br>
Principal investigator:<input type="text" name="principal"><br><br>
sponsoring agency:<input type="text" name="sponsoring"><br><br>
outlay:<input type="text" name="outlay"><br><br>
<input type="submit" name="submit" value="submit" />
</form>
</div>
</body>
</html>
