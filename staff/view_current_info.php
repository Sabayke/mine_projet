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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script> 

$(document).ready(function(){	
	
  $("#flip1").click(function(){
    $("#panel1").slideToggle("slow");
		$("#panel2").slideUp("slow");
		$("#panel3").slideUp("slow");
		$("#panel4").slideUp("slow");
  });
  $("#flip2").click(function(){
    $("#panel2").slideToggle("slow");
		$("#panel1").slideUp("slow");
		$("#panel3").slideUp("slow");
		$("#panel4").slideUp("slow");	
  });  
  $("#flip3").click(function(){
    $("#panel3").slideToggle("slow");
		$("#panel1").slideUp("slow");
		$("#panel2").slideUp("slow");
		$("#panel4").slideUp("slow");	
  });  
  $("#flip4").click(function(){
    $("#panel4").slideToggle("slow");
		$("#panel1").slideUp("slow");
		$("#panel2").slideUp("slow");
		$("#panel3").slideUp("slow");	
  });  
});
</script>
<style> 
#panel1,#panel2,#panel3,#panel4,#flip1,#flip2,#flip3,#flip4
{
width:380px;
padding:2px;
text-align:center;
background-color:#e5eecc;
border:solid 1px #c3c3c3;
}
#panel1,#panel2,#panel3,#panel4
{
padding:2px;
display:none;
}
</style>
 
</head>
<body>
<h2 style="padding-left: 14px;"><a href="index_logged.php">Dashboard</a></h2>
<h4 style=" text-align:right; color:#039; padding-right: 14px;">You are logged in as <?php 
$username= $_SESSION["sess_username"];
echo $username;
?> !</h4>
        <div id="form" style=" padding-left:140px; padding-right:20px; color:#039; text-align:left; float:left; padding-top:20px;"><h3 style="color:#090;">Account Information</h3><br><br>  
    
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

<form action="view_current.php" method="post" enctype="application/x-www-form-urlencoded">
<dl>
<dt>
 <br><br>  <input type="submit" name="backBtn" value="Back" onClick="index_logged.php" class="button" /></dt>
    </dl>
    </form>

</div>    
    
<div style="width:380px; float:right; padding-right:14px;">

<div id="flip1"><h4>OFFICE OF THE PRINCIPAL</h4></div>
<div id="panel1">
	<table align="center" class = "index-table" cellspacing="20px" >
    <tr>
    <td>Ms. Tanvia Kareem</td>
    <td>Principal</td>
    <td>Telephone: 04478444029<br/>Email: tanvia@gmail.com</td>
    </tr>  
    <tr>
    <td>Md. Nasim Ahmed</td>
    <td>Vice Principal</td>
    <td>Telephone: 04478444056<br/>Email: mdnasoykot@gmail.com</td>
    </tr>  
    </table>
    </div>
    
<div id="flip2"><h4>ACCOUNTS AND FINANCE</h4></div>
<div id="panel2">
	<table align="center" class = "index-table" cellspacing="20px" >
    <tr>
    <td>Mr. Maruf Sami</td>
    <td>Head Of Accounts</td>
    <td>Telephone: 04478444040<br/>Email: sami@gmail.com</td>
    </tr>
    <tr>
    <td>A.N.M Sabbir</td>
    <td>Accounts Officer</td>
    <td>Telephone: 04478444020<br/>Email: anm.sabbir@gmail.com</td>
    </tr>  
    <tr>
    <td>Ms. Nusrat Zahan</td>
    <td>Assistant Accounts Officer</td>
    <td>Telephone: 04478444044<br/>Email: nusratzahan@bracu.ac.bd</td>
    </tr>
    </table>
    </div>
    
<div id="flip3"><h4>IT SYSTEMS OFFICE</h4></div>
<div id="panel3">
	<table align="center" class = "index-table" cellspacing="20px" >
    <tr>
    <td>Mr. Mahin Ahmed</td>
    <td>IT Officer</td>
    <td>Mobile: 01922655566<br/>Email: mdmahinahmd@gmail.com</td>
    </tr>  
    <tr>
    <td>Md. Shadman</td>
    <td>IT Manager</td>
    <td>Telephone: 04478444036<br/>Email: msadman@gmail.com</td>
    </tr>  
    </table>
    </div>
    
<div id="flip4"><h4>MEDICAL OFFICE</h4></div>
<div id="panel4">
	<table align="center" class = "index-table" cellspacing="20px" >
    <tr>
    <td>Dr Salina Akhter</td>
    <td>Medical Consultant</td>
    <td>Telephone: 04478444026<br/>Email: salinaakt@gmail.com</td>
    </tr>  
    </table>
    </div>
    

</div>   
</body>
</html>

