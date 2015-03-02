<html>
<style>
body{background-image:url(background1.jpg)}
h2{text-align:center;margin-top:100px;font-size:30px;margin-left:80px;color:black}
img{float:left;margin-left:200px;margin-top:-80px}
th{text-align:centre;font-size:25px;margin-top:-100px;color:white}
a{font-family:arial;color:white;text-decoration:none}
td.menu{font-size:100%;}
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
<td  width="140px"><a href="admin_home.php"><pre>  Home  </pre></a></td>
<td width="150px"><a href="student_hm.php"><pre>  Students  </pre></a></td>
<td width="150px"><a href="faculty_hm.php"><pre>  Faculty  </pre></a></td>
 <td  width="150px" onmouseover="showmenu(&#39;sell&#39;)" onmouseout="hidemenu(&#39;sell&#39;)" style="text-align:center";width="130px">
   <a href="">Notice</a><br>
   <table border="1" class="menu" id="sell" style="margin-top:10px;text-align:center;width=530px;border-collapse:collapse">
   <tr width="135px" height="50px" style="text-align:center";width="230px"><td class="menu"><a href="admin_tostudent.php">To Student</a></td></tr>
   <tr><td width="135px" height="50px"class="menu" style="text-align:center";width="130px"><a href="admin_tofaculty.php">To Faculty</a></td></tr>
   </table>
  </td>
<td  width="130px"><a href="1.html"><pre>  Log Out  </pre></a></td>
</table>
</body>
</html>