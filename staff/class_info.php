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
<script language="javascript">
function showImage(divID){
    divID = divID.split("_");
    for(i=1;i<=10;i++){
        document.getElementById("div_image"+i).style.display="none";
    }
    document.getElementById("div_image"+divID[1]).style.display="";
}
</script>
 
 
</head>
 
<body>
<h2 style="padding-left: 14px;"><a href="index_logged.php">Dashboard</a></h2>
<h4 style=" text-align:right; color:#039; padding-right: 14px;">You are logged in as <?php 
$username= $_SESSION["sess_username"];
echo $username;
?> !</h4>
<center>
<table width="100%" border="0" cellspacing="0" cellpadding="0" vspace="30px;">
  <tr>
    <td align="center">
    <span id="div_1" onClick="showImage(this.id)">Class 1</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span id="div_2" onClick="showImage(this.id)">Class 2</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span id="div_3" onClick="showImage(this.id)">Class 3</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span id="div_4" onClick="showImage(this.id)">Class 4</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span id="div_5" onClick="showImage(this.id)">Class 5</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span id="div_6" onClick="showImage(this.id)">Class 6</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span id="div_7" onClick="showImage(this.id)">Class 7</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span id="div_8" onClick="showImage(this.id)">Class 8</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span id="div_9" onClick="showImage(this.id)">Class 9</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span id="div_10" onClick="showImage(this.id)">Class 10</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr height="200">
    <td align="center">
    <span id="div_image1">
    <div style="padding-left:18px; padding-top:5px; width:400px;color:#06F; float:left;"><h3>Class Teacher : </h3>
<?php
    $db = mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db ("school_database", $db);
    $query = "SELECT * FROM teacher_info WHERE id= '10321003'";	
    $result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());	
echo "<table>";
while($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['firstname'] ."&nbsp;". $row['lastname'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysql_close($db);
?>
 </div>
 
 <div style="padding-left:18px; padding-top:5px; color:#06F;"><h3>List Of Student : </h3>
<?php
    $db = mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db ("school_database", $db);
    $query = "SELECT * FROM teacher_info";	
    $result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());	
echo "<table>";
while($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['firstname'] ."&nbsp;". $row['lastname'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysql_close($db);
?>
 </div>
    </span>
    <span id="div_image2" style="display:none">    <div style="padding-left:18px; padding-top:5px; width:400px;color:#06F; float:left;"><h3>Class Teacher : </h3>
<?php
    $db = mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db ("school_database", $db);
    $query = "SELECT * FROM teacher_info WHERE id= '10301015'";	
    $result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());	
echo "<table>";
while($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['firstname'] ."&nbsp;". $row['lastname'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysql_close($db);
?>
 </div>
 
 <div style="padding-left:18px; padding-top:5px; color:#06F;"><h3>List Of Student : </h3>
<?php
    $db = mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db ("school_database", $db);
    $query = "SELECT * FROM teacher_info";	
    $result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());	
echo "<table>";
while($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['firstname'] ."&nbsp;". $row['lastname'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysql_close($db);
?>
 </div></span>
    <span id="div_image3" style="display:none"></span>
    <span id="div_image4" style="display:none"></span>
    <span id="div_image5" style="display:none"></span>
    <span id="div_image6" style="display:none"></span>
    <span id="div_image7" style="display:none"></span>
    <span id="div_image8" style="display:none"></span>
    <span id="div_image9" style="display:none"></span>
    <span id="div_image10" style="display:none"></span>


    </td>
  </tr>
</table>
</center>
</body>
</html>