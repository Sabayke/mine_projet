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
    <li><a href="create_new.php">Create Account</a></li><br>
    <li><a href="view_current.php">View Account</a></li><br>
    <li><a href="delete_current.php">Delete Account</a></li><br>

</div>
    
</div>
</body>
</html>