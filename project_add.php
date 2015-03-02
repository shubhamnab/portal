<html>
<style>
#add{text-align:right;margin-right:450px;margin-top:50px;font-size:23px;color:CornflowerBlue;font face="TEMPUS SANS ITC"}
</style>
<body>
<?php
include 'student_hm.php';
?>
<div id="add">
<form action="project_add1.php" method="POST">
Username:<input type="text" name ="user"><br><br>
Project-name:<input type="text" name="project_name"><br><br>
Team-members:<input type="text" name="team_members"><br><br>
Investigator:<input type="text" name="investigator"><br><br>

<input type="submit" name="submit" value="submit" />
</form>
</div>
</body>
</html>