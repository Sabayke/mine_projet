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
<h2 style="padding-left: 14px;"><a href="index_logged.php">Dashboard</a></h2>
<h4 style=" text-align:right; color:#039; padding-right: 14px;">You are logged in as <?php 
$username= $_SESSION["sess_username"];
echo $username;
?> !</h4>
    <div id="form" style=" padding-left:140px; padding-right:20px; color:#06F; text-align:left; width:400px; padding-top:20px; float:left;"><h3 style="color:#090;">View Account Details</h3>
    
    
<form style="text-align:left;color:#090;" action="view_current_info.php" method="post" enctype="application/x-www-form-urlencoded" >
Enter User ID: &nbsp; <input type = "text" name = "id">&nbsp; &nbsp;<INPUT TYPE="submit" name="Go" value="Go" onClick="view_current_info.php">
</form>
</div>
<div style="float:right; padding-right:14px;">
<?php
    $db = mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db ("school_database", $db);
    $query = "SELECT * FROM teacher_info";	
    $result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());
	
echo "<table>";
 echo "<tr><th>ID</th><th>Name</th></tr>";

while($row = mysql_fetch_array($result)) {
  echo "<tr>";
    echo "<td>".$row['id'] . "</td>";
  echo "<td>" . $row['firstname'] ."&nbsp;". $row['lastname'] ."</td>";
  echo "</tr>";
}

echo "</table>";

mysql_close($db);
?>
    

</div>    
</body>
</html>