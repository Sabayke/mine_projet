<?php include 'header.php';

$msg = "";

mysql_connect("localhost","root","");
mysql_select_db("school_database");
if (isset($_POST["doctorid"])) {
	extract($_POST);
	$query = mysql_query("select * from doctor where doctorid = '$doctorid'");
	if (!mysql_num_rows($query) > 0) {
		mysql_query("insert into doctor VALUES ('$doctorid','$fname','$mname','$lname','$dept')");
		$msg = "Doctor Successfully Added!";
	} else {
		$msg = "Doctor ID Already Exists!";
	}
}


?>

<form action = "" method = "post" />
<table class = "box-table-a" >
<?php if ($msg != "") { ?><tr><td></td><td><?=$msg;?></td></tr><?php } ?>
<tr><td class = "left" >Teacher ID</td><td class = "right" ><input type = "text" name = "doctorid" /></td></tr>
<tr><td>First Name</td><td><input type = "text" name = "fname" /></td></tr>
<tr><td>Middle Name</td><td><input type = "text" name = "mname" /></td></tr>
<tr><td>Last Name</td><td><input type = "text" name = "lname" /></td></tr>
<tr><td>Date of Birth</td><td><input type = "text" name = "dept" /></td></tr>
</table>
<button style = "margin-left: 20px;" >Submit</button>

<form>

<?php include 'footer.php'; ?>