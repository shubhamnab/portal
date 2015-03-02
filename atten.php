<html>
<style>
body{background-image:url(new.jpg)}
h2{text-align:center;margin-top:100px;font-size:30px;margin-left:80px;color:"CornflowerBlue"}
img{float:left;margin-left:200px;margin-top:-80px}
th{text-align:centre;font-size:25px;margin-top:-100px;color:"CornflowerBlue"}
img{float:left;margin-left:200px}
h3{text-align:centre;margin-left:200px;color:grey}
h5{text-align:centre;margin-left:100px;color:grey;margin-top:50px;font-size:22px;color:indigo}
a{font-family:arial;color:"CornflowerBlue";text-decoration:none}
#atten{text-align:centre;margin-left:600px;margin-top:100px;font-size:18px}
#mymonth{margin-left:80px}
#mypresent{margin-left:50px}
#myabsent{margin-left:59px}
#myuser{margin-left:20px}
#myyes{margin-left:70px}
#myno{margin-left:195px}
</style>
<body>
<?php
include 'faculty.php';
?>
<div id="atten">
<h1><font face="TEMPUS SANS ITC" color="CornflowerBlue"><u>Class Attendance</u></font></h1>
<form action ="atten1.php" method="POST">
Username:    <input type="text" name="Username" id="myuser"><br><br>
Subject:        <input type="text" name="subject" id="myuser"><br><br>
Month :
<select id="mymonth" name="month">
<option value="month">Month</option>
<option value="january">January</option>
<option value="february">February</option>
<option value="march">March</option>
<option value="april">April</option>
<option value="may">May</option>
<option value="june">June</option>
<option value="july">July</option>
<option value="august">August</option>
<option value="september">September</option>
<option value="october">October</option>
<option value="november">November</option>
<option value="december">December</option>
</select><br></br>
No. of presents:
<select id="mypresent" name="present">
<option value="0">Day</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>

</select><br></br>
No. of absents:
<select id="myabsent" name="absent">
<option value="0">Day</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>

</select><br></br>
Attendance sort:
<input type="radio" name="sort" value="yes" id="myyes">yes<br>
<pre><input type="radio" name="sort" value="No" id="myno">No</pre>
<pre>                <input type="submit" value="Submit"></pre>
</form>
</div>
</body>
</html>