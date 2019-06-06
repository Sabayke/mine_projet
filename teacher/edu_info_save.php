<?php
session_start();
 
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['sess_username'])) {
	header("location: login_form.php");
	exit();
}

$username= $_SESSION["sess_username"];

    $db = mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db ("school_database", $db);
	$password = mysql_real_escape_string($_POST['password']);
	$email = mysql_real_escape_string($_POST['email']);
	
	$query = "UPDATE login SET password = '$password', email = '$email'  WHERE username = '$username'";
	
	if(mysql_query($query)){ 
	$msg= "<h4>Saved changes</h4>";
		} 
		else{
		$msg= "Connection failed";
		}
	
	echo $msg;
	header("location: edu_info.php");
	
?>