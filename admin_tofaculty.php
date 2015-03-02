<html>
<style>
h1{text-align:center;margin-top:50px;font-size:30px;margin-left:80px;color:black}
</style>
<body>
<?php
include 'admin_home.php';
?>
<form action ="ad_tofac1.php" method="POST">
<h1>NOTICE : </h1>
<form style="margin-left:400px;margin-top:0px;color:white;font-size:20px"><br>
<td><textarea rows="14" cols="80" style="margin-left:350px" name="notice"></textarea><br><br>
<tr>
<td style="margin-left:500px">Faculty id: </td><input type="text" name="id">
<button  style="margin-left:650px" type="submit" name="submit" value="Submit"><pre>   Submit</pre></button>
</form>
</body>
</html>