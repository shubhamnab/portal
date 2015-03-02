<html>
<style>
body{background-image:url(background1.jpg)}
h1{margin-left:450px;font-size:30px;margin-top:50px}
td:hover{background-image:url('hover.jpg')};
h1{margin-left:px;font-size:30px;margin-top:50px}
h2{margin-left:580px;font-size:30px}
img{float:left;margin-left:320px;margin-top:-100px}
th:hover{background-image:url(bg-menu.png);background-repeat: repeat-x};
img{float:left;margin-left:400px;margin-top:-100px}
th{text-align:left;font-size:25px;margin-top:-100px;color:black;margin-left:-500px}
a{font-family:arial;color:grey;text-decoration:none}
td.menu{font-size:100%;font-family:Helvetica Neue;width="100"}
table.menu
{
width="200px";
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
<h1><i>MALAVIYA NATIONAL INSTITUTE OF</i></h1>
<h2><i>TECHNOLOGY</i></h2>
<img src="mnit_logo.png">
<table  class="main" border="1"style="background-image:url('background2.jpg');margin-left:300px;margin-right:90px;margin-top:50px;font-size:25px;border-collapse:collapse;height:50px;width:800px ">
 <tr>
   <td class="menu"style="text-align:center">
   <a href="3.php">Home</a></td>
  <td style="text-align:center";width="230px" onmouseover="showmenu(&#39;scripting&#39;)" onmouseout="hidemenu(&#39;scripting&#39;)" >
   <a href="#">Information</a><br>
   <table  border="1" class="menu" id="scripting"style="margin-top:10px;text-align:center;width=530px;border-collapse:collapse">
   
   <tr><td width="190px" height="40px" class="menu"><a href="new.php">Personal</a></td></tr>
   <tr><td width="190px" height="40px" class="menu"><a href="s_lab_info.php">Library</a></td></tr>
   <tr><td width="190px" height="40px" class="menu"><a href="s_result.php">Result</a></td></tr>
   </table>
  </td>
<td class="menu"style="text-align:center"><a href="s_projects.php"> Projects</a></td>
<td class="menu"style="text-align:center"><a href="s_attendence.php"> Attendence</a></td>
<td class="menu"style="text-align:center"><a href="1.html"> Log Out</a></td>
</tr>
</table>
</body>
</html>