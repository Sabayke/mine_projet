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
<link href = "../staff/css/style.css" rel = "stylesheet" />
 
</head>
<body>
<h2 style="padding-left: 14px;"><a href="../staff/index_logged.php">Dashboard</a></h2>
<h4 style=" text-align:right; color:#039; padding-right: 14px;">You are logged in as <?php 
$username= $_SESSION["sess_username"];
echo $username;
?> !</h4>
    <div id="form" style=" padding-left:140px; padding-right:20px; color:#06F; text-align:left; width:400px; padding-top:20px;"><h3 style="color:#090;"><?php
$db = mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db ("school_database", $db);
	$id = mysql_real_escape_string($_POST['id']);		
	$query = mysql_query("SELECT * FROM teacher_info WHERE id = '$id'");
	if (mysql_num_rows($query) > 0) {
		mysql_query("DELETE FROM teacher_info WHERE id ='$id'");
		$msg = "Successfully Deleted!";
	} else {
		$msg = "User ID Doesnot Exists!";
	}
	echo $msg;
?></h3>
    
<form action="index_logged.php" method="post" enctype="application/x-www-form-urlencoded">
<dl>
<dt>
 <br><br>  <input type="submit" name="backBtn" value="Back" onClick="index_logged.php" class="button" /></dt>
    </dl>
    </form>
</div>
    
</body>
</html> 
