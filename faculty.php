<html>
<style>
body{background-image:url(background1.jpg)}
h2{text-align:center;margin-top:100px;font-size:30px;margin-left:80px;color:black}
td:hover{background-image:url('hover.jpg')};
h2{text-align:center;margin-top:100px;font-size:30px;margin-left:80px;color:black}
img{float:left;margin-left:200px;margin-top:-80px}
th{text-align:centre;font-size:25px;margin-left:-50px;color:black}
img{float:left;margin-left:200px}
a{font-family:arial;color:grey;text-decoration:none}
th:hover{background-image:url(.jpg);background-repeat: repeat-x};
td.menu{font-size:100%;font-family:Helvetica Neue;}
table.menu
{
text-align:center;
position:absolute;
visibility:hidden;
background-image:url('background2.jpg');
}
</style>
<script>
function showmenu(elmnt)
{
document.getElementById(elmnt).style.visibility="visible";
}
function hidemenu(elmnt)
{
document.getElementById(elmnt).style.visibility="hidden";
}
</script>
<body>
<h2><b>MALAVIYA NATIONAL INSTITUTE OF TECHNOLOGY</b></h2>
<img src="mnit_logo.png">

<table  class="main" border="1"style="background-image:url('background2.jpg');margin-left:300px;margin-right:90px;margin-top:50px;font-size:25px;border-collapse:collapse;height:50px;width:800px ">
 <tr>
   <td width="100px" class="menu" style="text-align:center";width="130px">
   <a href="faculty_home.php">Home</a></td>
  <td width="190px"style="text-align:center";width="130px" onmouseover="showmenu(&#39;scripting&#39;)" onmouseout="hidemenu(&#39;scripting&#39;)" >
   <a href="#">Personal Info</a><br>
   <table  border="1" class="menu" id="scripting"style="margin-top:10px;text-align:center;width=530px;border-collapse:collapse">
   
   <tr><td width="170px" height="40px" class="menu"><a href="f_personal.php">View</a></td></tr>
   <tr><td width="170px" height="40px" class="menu"><a href="faculty_update.php">Update</a></td></tr>
   </table>
  </td>

<td width="130px"style="text-align:center"><a href="f_project.php">  Projects</a></td>
<td width="160px"style="text-align:center"><a href="atten.php"> Attendence  </a></td>
<td width="130px"onmouseover="showmenu(&#39;sell&#39;)" onmouseout="hidemenu(&#39;sell&#39;)" style="text-align:center";width="130px">
   <a href="">Notice</a><br>
   <table border="1" class="menu" id="sell"style="margin-top:10px;text-align:center;width=530px;border-collapse:collapse">
   <tr><td width="115px" height="40px" class="menu"><a href="fromfaculty_notice.php">To Student</a></td></tr>
   <tr><td width="115px" height="40px" class="menu"><a href="c.php">From Admin</a></td></tr>
   </table>
  </td>

<td width="125px"style="text-align:center"><a href="1.html">  Log Out  </a></td>
</tr>
</table>
</body>
</html>