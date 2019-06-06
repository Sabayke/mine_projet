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
	
	padding: 20px 60px 20px 60px;
	text-align:center;
	color:#090;
}

th {
    background-color:#DFE3FF;
    color:color:#ECFFF5;
	border: 1px solid #090;
}
td {border: 1px solid #090;
}
</style>

</head>
<body>
<h2 style="padding-left: 14px;"><a href="index_logged.php">Dashboard</a></h2>
<h4 style=" text-align:right; color:#039; padding-right: 14px;">You are logged in as <?php 
$username= $_SESSION["sess_username"];
echo $username;
?> !</h4>
    <div id="form" style=" padding-left:140px; padding-right:20px; color:#039; text-align:left; padding-top:20px;"><h3 style="color:#090;">Account Information</h3><br><br>  
    
    <?php
    $db = mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db ("school_database", $db);
	$id = mysql_real_escape_string($_POST['id']);			
	$query = mysql_query("SELECT * FROM teacher_info WHERE id = '$id'");
	
	
		if (mysql_num_rows($query) > 0) {
			$result = mysql_fetch_array($query);
		echo "<b>Username :</b> &nbsp".$result['firstname']."&nbsp;".$result['lastname']."<br><br>";
		echo "<b>ID :</b> &nbsp".$result['id']."<br><br>";		
		echo "<b>First Name :</b> &nbsp".$result['firstname']."<br><br>";
		echo "<b>Last Name :</b> &nbsp".$result['lastname']."<br><br>";
		echo "<b>Email :</b> &nbsp".$result['email']."<br><br>";
		
	} else {
		echo "<p>User ID Doesnot Exists!</p>";
	}
?>

<form action="index_logged.php" method="post" enctype="application/x-www-form-urlencoded">
<dl>
<dt>
 <br><br>  <input type="submit" name="backBtn" value="Back" onClick="index_logged.php" class="button" /></dt>
    </dl>
    </form>

</div>    


</body>
</html>