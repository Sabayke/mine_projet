<?php
include 'header.php';
include 'footer.php';
?>

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
<h2 style="padding-left: 14px; color:#C33;">Teacher's Corner</h2>

<?php
    $db = mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db ("school_database", $db);
    $query = "SELECT * FROM teacher_info";	
    $result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());
	
echo "<table>";
 echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

while($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] ."</td>";
  echo "<td>" . $row['firstname'] ."&nbsp;". $row['lastname'] ."</td>";
  echo "<td>".$row['email'] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysql_close($db);
?>

    
</body>
</html>