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
    <div id="form" style=" padding-left:140px; padding-right:20px; float:left; color:#06F;">
    <h3 style="color:#C33"> Welcome!</h3><br>
    <div style="padding-left:18px;">
    <li><a href="personal_info.php">Personal Info</a></li><br>
    <li><a href="edu_info.php">Educational Info</a></li><br>
    <li><a href="contact_info.php">Contact Info</a></li><br>

</div>
    
    </div>
<div style="float:left; padding-left:100px; padding-top:78px; color:#093; text-align:right;" >
<?php
// mesmodification
   // $db = mysqli_connect("localhost", "root", "") or die(mysql_error());
    //mysqli_select_db ("school_database", $db);
    //$query = "SELECT * FROM login WHERE username = '$username'";
	/*$query2 = "SELECT * FROM teacher_info WHERE firstname = '$username'";	
    $result = mysqli_query($query) or die ("Unable to verify user because " . mysql_error());
	$result2 = mysqli_query($query2) or die ("Unable to verify user because " . mysql_error());
	$row = mysqli_fetch_array($result);
	$row2 = mysqli_fetch_array($result2);
	*/
	
	$db= new PDO('mysql:host=127.0.0.1;dbname=school_database', 'root', '');
	
	$requser1 = $db->prepare("SELECT * FROM login WHERE username = '$username'");
	$requser1->execute(array($username));
	$userexist1 = $requser1->rowCount();
	$userinfo1 = $requser1->fetch();
	$requser2 = $db->prepare("SELECT * FROM teacher_info WHERE firstname = '$username'");
	$requser2->execute(array($username));
	$userexist2 = $requser2->rowCount();
	$userinfo2 = $requser2->fetch();
	
	if( $row['userlevel']==2){
		$userlevel= "Staff";
	}
	elseif($row['userlevel'] ==3){
		$userlevel= "Teacher";
	}
	else{
		$userlevel= "Admin";
	};
	
  	echo "<form>";
	echo "<fieldset>";
  	echo "<legend>Personal Information</legend>";
    echo 'ID: &nbsp;&nbsp; <input type="text" disabled placeholder="' .htmlspecialchars($row['id']) . '"><br><br>';
	echo 'Username: &nbsp;&nbsp; <input type="text" disabled placeholder="' .htmlspecialchars($row['username']) . '"><br><br>';
	echo 'Password: &nbsp;&nbsp; <input type="text" disabled placeholder="' .htmlspecialchars($row['password']) . '"><br><br>';
	echo 'User Type: &nbsp;&nbsp; <input type="text" disabled placeholder="' .htmlspecialchars($userlevel) . '"><br><br>';
	echo 'User Level: &nbsp;&nbsp; <input type="text" disabled placeholder="' .htmlspecialchars($row['userlevel']) . '"><br><br>';
		echo 'First Name: &nbsp;&nbsp; <input type="text" disabled placeholder="' .htmlspecialchars($row2['firstname']) . '"><br><br>';
	echo 'Last Name: &nbsp;&nbsp; <input type="text" disabled placeholder="' .htmlspecialchars($row2['lastname']) . '"><br><br>';
	echo 'Gender: &nbsp;&nbsp; <input type="text" disabled placeholder="' .htmlspecialchars($row2['gender']) . '"><br><br>';
	echo 'Email: &nbsp;&nbsp; <input type="text" disabled placeholder="' .htmlspecialchars($row['email']) . '"><br><br>';
	echo "</fieldset>";
  	echo "</form>";

?>
<form action="personal_info_edit.php" method="post" enctype="application/x-www-form-urlencoded" style="text-align:right;">
<input type="submit" name="edit" value="Edit" onClick="personal_info_edit.php"/>
</form>

</div>   
</body>
</html>