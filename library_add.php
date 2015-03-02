<html>
<style>
#add{text-align:right;margin-right:450px;margin-top:50px;font-size:23px;color:CornflowerBlue}
</style>
<body>
<?php
include 'student_hm.php';
?>
<div id="add">
<form action="library_add1.php" method="POST">
Username:<input type="text" name ="user"><br><br>
Book-name:<input type="text" name="book_name"><br><br>
Book-no:<input type="text" name="book_no"><br><br>
Issued-date:<input type="text" name="issued_date"><br><br>
Submission-date:<input type="text" name="submission_date"><br><br>
<input type="submit" name="submit" value="submit" />
</form>
</div>
</body>
</html>