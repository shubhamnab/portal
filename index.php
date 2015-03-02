<html>
<style>
body{background-image:url('background1.jpg')}
td:hover{background-image:url('hover.jpg')};
body{background-image:url('background1.jpg')}
th:hover{background-color:white};
a:link    {color:green;};
body{background-image:url('background1.jpg')}
h2{text-align:center;margin-top:50px;font-size:30px;margin-left:100px}
h3{text-align:center;margin-top:-25px;font-size:30px;margin-left:10px}
h4{text-align:centre;margin-top:50px;margin-left:200px;font-size:25px}
h5{text-align:centre;margin-top:25px;margin-left:200px;font-size:17px}
h6{text-align:centre;margin-left:1100px;font-size:15px;font-family:century gothic}
img{float:left;margin-left:360px;margin-top:-100px}
th{font-size:20px;margin-left:150px;color:white;margin-top:-180px}
a{font-family:arial;color:grey;text-decoration:underline;text-decoration:none}
p1{margin-bottom:500px;margin-left:80px}
marquee{font-size:20px}
#sbm{margin-top:100px}
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
<h2><i>MALAVIYA NATIONAL INSTITUTE OF </i></h2>
<h3><i>TECHNOLOGY</i></h3>
<img src="mnit_logo2.png">
<table  class="main" border="1"style="background-image:url('background2.jpg');margin-left:300px;margin-right:90px;margin-top:50px;font-size:25px;border-collapse:collapse;height:50px;width:800px ">
 <tr>
   <td width="200px" height="50px" class="menu" style="text-align:center";width="130px">
   <a href="1.html">Home</a></td>
  <td width="200px" height="50px" style="text-align:center";width="130px" onmouseover="showmenu(&#39;scripting&#39;)" onmouseout="hidemenu(&#39;scripting&#39;)" >
   <a href="#">Login</a><br>
   <table border="1" class="menu" id="scripting"style="margin-top:10px;text-align:center;width=530px;border-collapse:collapse">
   
   <tr><td border="1" width="190px" height="40px" class="menu"><a href="2.html">Student</a></td></tr>
   <tr><td border="1" width="190px" height="40px" class="menu"><a href="faculty.html">Faculty</a></td></tr>
   <tr><td border="1" width="190px" height="40px" class="menu"><a href="admin.html">Admin</a></td></tr>
   </table>
  </td>
  <td width="200px" height="50px" onmouseover="showmenu(&#39;sell&#39;)" onmouseout="hidemenu(&#39;sell&#39;)" style="text-align:center";width="130px">
   <a href="">Notice</a><br>
   <table border="1" class="menu" id="sell"style="margin-top:10px;text-align:center;width=530px;border-collapse:collapse">
   <tr><td width="190px" height="40px"  class="menu"><a href="a.php">From Faculty</a></td></tr>
   <tr><td width="190px" height="40px" class="menu"><a href="b.php">From Admin</a></td></tr>
   </table>
  </td>
   <td width="200px" height="50px" style="text-align:center";width="130px" onmouseover="showmenu(&#39;fq&#39;)" onmouseout="hidemenu(&#39;fq&#39;)" >
   <a href="#">Contact Us</a><br>
   <table border="1" class="menu" id="fq"style="margin-top:10px;text-align:center;width=530px;border-collapse:collapse">
   
   <tr><td border="1" width="190px" height="40px" class="menu"><a href="feed.php">FAQ</a></td></tr>
   <tr><td border="1" width="190px" height="40px" class="menu"><a href="contact us.html">Feedback</a></td></tr>
   </table>
  </td>
 </tr>
</tbody></table>
</body>
</html>