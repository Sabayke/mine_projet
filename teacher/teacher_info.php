<?php
include 'header.php';
include 'footer.php';
?>

<html>
<head>
<title>School Administrative System </title>
<link href = "css/style.css" rel = "stylesheet" />
</head>
<body>
<div class="div1" style="padding-top:100px; text-align:center;">
<form action="add_teacher.php" method="post" enctype="application/x-www-form-urlencoded">
     <input type="submit" name="addBtn" value="Add New Teacher Info" onClick="index.php" class="button" /></dl>
</form>
<br><br> 
<form action="view_teacher.php" method="post" enctype="application/x-www-form-urlencoded">    
        <dl> <input type="submit" name="viewBtn" value="View Current Teacher Info" onClick="view_teacher.php" class="button" />
 </dl>
 <a>via </a>
 <br><br>
 <dl>
 <dt><label>Name: </label>
    &nbsp; &nbsp;<input type="text" name="name" class="input"/>
    &nbsp; &nbsp; 
 &nbsp; <a>or</a> &nbsp; &nbsp; 
 <label>ID: </label>
    &nbsp; &nbsp;<input type="text" name="id" class="input"/></dt>

</dl>
</form>

</div>
</body>
</html>

