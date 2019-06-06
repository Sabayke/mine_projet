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

<!-- Javascript goes in the document HEAD -->
<script type="text/javascript">
function altRows(id){
	if(document.getElementsByTagName){  
		
		var table = document.getElementById(id);  
		var rows = table.getElementsByTagName("tr"); 
		 
		for(i = 0; i < rows.length; i++){          
			if(i % 2 == 0){
				rows[i].className = "evenrowcolor";
			}else{
				rows[i].className = "oddrowcolor";
			}      
		}
	}
}
window.onload=function(){
	altRows('alternatecolor');
}
</script>

<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.altrowstable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #a9c6c9;
	border-collapse: collapse;
}
table.altrowstable th {
	border-width: 2px;
	padding: 8px;
	border-style: solid;
	border-color: #FFF;
}
table.altrowstable td {
	border-width: 2px;
	padding: 8px;
	border-style: solid;
	border-color: #FFF;
}
.oddrowcolor{
	background-color:#BBC989;
}
.evenrowcolor{
	background-color:#e5eecc;
}
</style>

</head>
<body>
<h2 style="padding-left: 14px;">Dashboard</h2>
<h4 style=" text-align:right; color:#039; padding-right: 14px;">You are logged in as <?php 
$username= $_SESSION["sess_username"];
echo $username;
?> !</h4>
<div>
<div style="width:380px;">

<!-- Table goes in the document BODY -->
<table class="altrowstable" id="alternatecolor">
<tr>
	<th>Info Header 1</th><th>Info Header 2</th><th>Info Header 3</th>
</tr>
<tr>
	<td>Text 1A</td><td>Text 1B</td><td>Text 1C</td>
</tr>
<tr>
	<td>Text 2A</td><td>Text 2B</td><td>Text 2C</td>
</tr>
</tr>
<tr>
	<td>Text 3A</td><td>Text 3B</td><td>Text 3C</td>
</tr>
<tr>
	<td>Text 4A</td><td>Text 4B</td><td>Text 4C</td>
</tr>
<tr>
	<td>Text 5A</td><td>Text 5B</td><td>Text 5C</td>
</tr>
</table>
<!--  The table code can be found here: http://www.textfixer/tutorials/css-tables.php#css-table03 -->
</div>
</div>
</body>
</html>

