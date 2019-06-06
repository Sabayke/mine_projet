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

</head>
<body>
<h2 style="padding-left: 14px;"><a href="index_logged.php">Dashboard</a></h2>
<h4 style=" text-align:right; color:#039; padding-right: 14px;">You are logged in as <?php 
$username= $_SESSION["sess_username"];
echo $username;
?> !</h4>
    <div id="form" style=" padding-left:140px; padding-right:20px; color:#06F; text-align:left; width:400px; padding-top:20px;"><h3 style="color:#090;">Delete account</h3>
    
    
<form style="text-align:left;color:#090;" action="delete_result.php" method="post" enctype="application/x-www-form-urlencoded" >
Enter User ID: &nbsp; <input type = "text" name = "id"><br><h5 style="color:#933;">*Once an account is deleted, it cannot be retrieved.</h5>
<INPUT TYPE="submit" name="Confirm" value="Confirm">
</form>
</div>
    
</body>
</html>

