<html>
<style>
#add{text-align:right;margin-right:400px;margin-top:70px;font-size:23px;color:"harrington"}
</style>
<body>
<?php
include 'faculty_hm.php';
?>
<div id="add">
<form action="add1.php" method="POST">
Name:<input type="text" name="name"><br><br>
Username:<input type="text" name ="user"><br><br>
ID:<input type="text" name="id"><br><br>
Department:<input type="text" name="dept"><br><br>
Position:<input type="text" name="position"><br><br>
Phone no:<input type="text" name="phone"><br><br>
Fax no:<input type="text" name="fax"><br><br>
Email id:<input type="email" name="email"><br><br>
<input type="submit" name="submit" value="submit" />
</form>
</div>
</body>
</html>
