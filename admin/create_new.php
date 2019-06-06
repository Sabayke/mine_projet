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
    <div id="form" style=" padding-left:140px; padding-right:20px; color:#06F; text-align:left; width:400px; padding-top:20px;">
<h3 style="color:#090;">Create New Staff Account</h3>
    
    
<form style="text-align:left;color:#090;" action="add_staff_info.php" method="post" enctype="application/x-www-form-urlencoded" >
ID: &nbsp; <input type = "text" name = "id"><br /><br />
First name: &nbsp; <input type = "text" name = "firstname"><br /><br />
Last name: &nbsp; <input type="text" name="lastname"><br /><br />
<INPUT TYPE="submit" name="Submit" value="Submit">
</form>
</div>
    
</body>
</html>

