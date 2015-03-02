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
p1{margin-bottom:500px;margin-left:220px;font-size:32px;font-family:Bradley Hand ITC}
p {
	display: block;
}
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
#feedback{background-color:white;margin-left:200px;margin-right:200px;margin-top:50px}
#back{background-color:white;margin-right:100px;margin-left:100px;margin-top:70px}
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
   
   <tr><td border="1" width="190px" height="50px" class="menu"><a href="2.html">Student</a></td></tr>
   <tr><td border="1" width="190px" height="50px" class="menu"><a href="faculty.html">Faculty</a></td></tr>
   <tr><td border="1" width="190px" height="50px" class="menu"><a href="admin.html">Admin</a></td></tr>
   </table>
  </td>
  <td width="200px" height="50px" onmouseover="showmenu(&#39;sell&#39;)" onmouseout="hidemenu(&#39;sell&#39;)" style="text-align:center";width="130px">
   <a href="">Notice</a><br>
   <table border="1" class="menu" id="sell"style="margin-top:10px;text-align:center;width=530px;border-collapse:collapse">
   <tr><td width="190px" height="50px"  class="menu"><a href="a.php">From Faculty</a></td></tr>
   <tr><td width="190px" height="50px" class="menu"><a href="b.php">From Admin</a></td></tr>
   </table>
  </td>
  <td width="200px" height="50px" style="text-align:center";width="130px" onmouseover="showmenu(&#39;fq&#39;)" onmouseout="hidemenu(&#39;fq&#39;)" >
   <a href="#">Contact Us</a><br>
   <table border="1" class="menu" id="fq"style="margin-top:10px;text-align:center;width=530px;border-collapse:collapse">
   
   <tr><td border="1" width="190px" height="50px" class="menu"><a href="feed.php">FAQ</a></td></tr>
   <tr><td border="1" width="190px" height="50px" class="menu"><a href="contact us.html">Feedback</a></td></tr>
   </table>
  </td>
 </tr>
</tbody></table>

<div id="feedback">
<div id="back">
<p1>Frequently Asked Questions</p1>

<p>1. What is a Web Portal?</p>
<p>Ans: A web Portal is a website that brings information together from diverse sources in a uniform way. 
Usually, each information source gets its dedicated area on the page for displaying information.
 The user can configure which ones to display. Apart from the standard search engine feature, 
 web portals offer other services such as email, news, information, databases and entertainment.</p>
 
<p>2. How do I log into the Portal?</p>
<p>Ans: You can log on to the portal at portal.mnit.ac.in. Enter your USER NAME and PASSWORD. 
Then, click the SUBMIT button. The system will verify your status at the college database and 
show you links that are personalized for you. When you have finished using the portal,
 always remember to click SIGN OUT at top right corner of the screen</p>
 
<p>3. How do I access my information?</p>
<p>Ans: Firstly you have to login to your account by using username and password.he system will verify your status at the college database and 
show you links that are personalized for you.There are various links present at the top of web page which directs to your related informations</p> 

<p>4. What are the facilities for the students?</p>
<p>Ans: 1. After registration by administrator student can login with login details provided to them.<br>
2. After login student can view their informations:<br>
a. Personal<br>
b. Library<br>
c. Result<br>
4. Students can see the projects alloted to them by the admin.<br>
5. Students can see the status of their attendance given by respective faculties.<br> 
9. Inbox (Read messages sent by other Student, Faculty or Administrator)<br>
10. View Notice Posted by Administrator or Faculty.</p>

<p>5. What are the facilities for the Faculties?</p>
<p>Ans: 1. After registration by administrator faculties can login with login details.<br>
2. View their personal informations.<br>
3. Update their informations.<br>
4. See the projects alloted to them by the admin.<br>
5. Post attendance detail of each student.<br> 
6. Post Notice<br>
7. View Notice Posted by Administrator.<br>
</p>

<p>6. What are the facilities for the Admin?</p>
<p>Ans:   1. Registration of students & Faculties<br>
2. Add personal, library, results and projects of students and faculties<br>
3. Post Notice (which is visible to student & faculty after login)<br>
4. Delete the informations of students and faculties who left the college.<br>
</p>
</div>
</div>
</body>
</html>