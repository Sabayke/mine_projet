<?php
ini_set('display_errors',true);
ini_set('error_reporting',E_ALL);  
 //error reporting
ob_start();            
@session_start();
include_once('../functions/auth.php');
$current_user = current_user();
if(isset($login_required)){require_login();}
?>
<!DOCTYPE HTML>
<html>
	<head>
	    <meta charset="utf-8">
	    <title>School Administrative System</title>
	    <link href="../libs/css/stylesheet.css" rel="stylesheet" type="text/css">
	    <link href="../libs/css/style.css" rel="stylesheet" type="text/css">
        <link href="../libs/css/style_header.css" rel="stylesheet" type="text/css">
        
	</head>
<body>
<!-- Header -->
<div id='cssmenu'>
	<ul> 

	  <?php if($current_user):?>
          <li><a href='../home.php'><span>Home</span></a></li>
          <li><a href='../teacher.php'><span>Teacher</span></a></li>
 			<li><a href='../student.php'><span>Student</span></a></li>
	      <li><a href='../logout.php'><span>Logout</span></a></li>
          <li><a href='../classroom.php'><span>Classroom</span></a></li>
            <li><a href='../calendar.php'><span>Calender</span></a></li>
            <li><a href='../noticeboard.php'><span>Notice Board</span></a></li>
	  <?php else: ?>
	        <li><a href='../index.php'><span>Home</span></a></li>
            
                       
            
	       	<li><a href='../login.php'><span>Login</span></a></li>
	       	
	  <?php endif; ?>

	</ul>
</div>
