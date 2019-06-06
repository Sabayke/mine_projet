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
padding:5px;
padding-left:80px;
text-align:left;
background-color:#F0F0F0;
border:solid 1px #c3c3c3;
}
#panel1,#panel2,#panel3,#panel4
{
text-align:left;
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
<h2 style=" color:#C33; padding-left: 14px;">Notice Board</h2>
<div id="flip1"><h4>Eid Holiday Notice</h4></div>
<div id="panel1">
	<table align="center" class = "index-table" cellspacing="40px" >
        <tr>
    <td>Publish Date: Monday, July 21, 2014 - 11:45<br><br>Our School will remain closed for "Eid-Ul-Fitr" from July 27 till July 31, 2014.<br>
In addition, according to the Government holiday list, "Shab-e-Qadar" will be observed on Friday, July 25, 2014.</td>
    </tr>
    </table>
    </div>
    
<div id="flip2"><h4>Exam Preparatory Recess, 2nd Term Examination</h4></div>
<div id="panel2">
	<table align="center" class = "index-table" cellspacing="40px" >
    <tr>
    <td>Publish Date: Tuesday, July 1, 2014 - 1:45<br><br>Second Term Examination will be held from August 27 till September 15, 2014.<br>
Exam preparatory break have been declared from August 20, 2014. Classes will be continue until then.</td>
    </tr> 

    </table>
    </div>
    
<div id="flip3"><h4>Admission Test Results, Year 2015</h4></div>
<div id="panel3">
	<table align="center" class = "index-table" cellspacing="40px" >
    <tr>
    <td>Publish Date: Tuesday, June 17, 2014 - 12:05<br><br>Admission Test Results of Year 2015 to be published on 3 December, 2014.</td>
    </tr> 
    </table>
    </div>
    
<div id="flip4"><h4>Classes of 2nd Term 2014 end</h4></div>
<div id="panel4">
	<table align="center" class = "index-table" cellspacing="40px" >
    <tr>
    <td>Publish Date: Tuesday, June 15, 2014 - 10:00<br><br>Second Term Examination will be held from August 27 till September 15, 2014.<br>
Exam preparatory break have been declared from August 20, 2014. Classes will be dismissed after examination.</td>
    </tr>  
    </table>
    </div>
    
</body>
</html>