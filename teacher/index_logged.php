<?php
include 'header_logged.php';
include 'footer.php';

//Start session
session_start();
 
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['sess_username'])) {
	header("location: login_form.php");
	exit();
}?>
<html>
<head>
<title>School Administrative System </title>
<link href = "css/style.css" rel = "stylesheet" />
<style>
table {
	margin-left:40px;
    border-collapse: collapse;
	
}
table, td, th {
	font:Verdana, Geneva, sans-serif;
	font-size:16px;
	
	padding: 10px 30px 10px 30px;
	text-align:center;
	color:#009;
}

th {
    background-color:#DFE3FF;
    color:#009;
	border: 1px solid #06F;
}
td {border: 1px solid #06F;
}
</style>

</head>
<body>
<h2 style="padding-left: 14px;"><a>Dashboard</a></h2>
<h4 style=" text-align:right; color:#039; padding-right: 14px;">You are logged in as <?php 
$username= $_SESSION["sess_username"];
echo $username;
?> !</h4>
    <div id="form" style=" padding-left:140px; padding-right:20px; float:left; color:#06F;">
    <h3 style="color:#C33"> Welcome!</h3><br>
    <div style="padding-left:18px;">
    <li><a href="personal_info.php">Personal Info</a></li><br>
    <li><a href="edu_info.php">Educational Info</a></li><br>
    <li><a href="contact_info.php">Contact Info</a></li><br>
    <li><a href="routine.php">Class Routine</a></li><br>

</div>
    
    </div>
<div style="float:right; padding-right:14px;">
<?php
     $db= new PDO('mysql:host=127.0.0.1;dbname=school_database', 'root', '');
   // mysql_select_db ("school_database", $db);
    //$query = "SELECT * FROM teacher_info";	
    //$result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());
	$requser = $db->prepare("SELECT * FROM teacher_info");
	$requser->execute(array());
	$userexist = $requser->rowCount();
	$userinfo = $requser->fetch();
echo "<table>";
 echo "<tr><th>ID</th><th>Name</th></tr>";

while($userinfo = $requser->fetch()) {
  echo "<tr>";
    echo "<td>".$userinfo['id'] . "</td>";
  echo "<td>" . $userinfo['firstname'] ."&nbsp;". $userinfo['lastname'] ."</td>";
  echo "</tr>";
}

echo "</table>";

//mysql_close($db);
?>
    

</div>   
</body>
</html>