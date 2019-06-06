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


<?php
$db = mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db ("school_database", $db);
	$id = mysql_real_escape_string($_POST['id']);
	$firstname = mysql_real_escape_string($_POST['firstname']);
	$lastname = mysql_real_escape_string($_POST['lastname']);
	
	$query = mysql_query("SELECT * FROM teacher_info WHERE id = '$id'");
	if (!mysql_num_rows($query) > 0) {
		mysql_query("INSERT INTO teacher_info (id, firstname, lastname) VALUES ('$id','$firstname','$lastname')");
		$msg = "Successfully Added!";
	} else {
		$msg = "Teacher ID Already Exists!";
	}
	echo $msg;
?> 
<html>
<body>
<div id="form" style=" padding-left:140px; padding-right:20px; color:#06F; text-align:left; width:400px; padding-top:40px;">
<form action="add_teacher.php" method="post" enctype="application/x-www-form-urlencoded">
<dl>
<dt>
 <br><br>  <input type="submit" name="backBtn" value="Back" onClick="add_teacher.php" class="button" /></dt>
    </dl>
    </form>

</div>
</body>
</html>
