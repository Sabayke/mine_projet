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
    <span id="div_image1"><img src="image/div_image1.gif" border="0" /></span>
    <span id="div_image2" style="display:none"><img src="image/div_image2.gif" border="0"/></span>
    <span id="div_image3" style="display:none"><img src="image/div_image3.gif" border="0"/></span>
    <span id="div_image4" style="display:none"><img src="image/div_image4.gif" border="0"/></span>
    <span id="div_image5" style="display:none"><img src="image/div_image5.gif" border="0"/></span>
    <span id="div_image6" style="display:none"><img src="image/div_image6.gif" border="0"/></span>
    <span id="div_image7" style="display:none"><img src="image/div_image7.gif" border="0"/></span>
    <span id="div_image8" style="display:none"><img src="image/div_image8.gif" border="0"/></span>
    <span id="div_image9" style="display:none"><img src="image/div_image9.gif" border="0"/></span>
    <span id="div_image10" style="display:none"><img src="image/div_image10.gif" border="0"/></span>


    </td>
  </tr>
</table>
</center>
</body>
</html>