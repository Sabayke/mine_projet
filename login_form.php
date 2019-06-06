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

    <form action="login.php" method="post" enctype="application/x-www-form-urlencoded">
    <dl>
    <dt><label>Username: </label>
    &nbsp; &nbsp; <input type="text" name="username" class="input"/></dt>
    <br>
    
            <dt><label>Password: </label>
        &nbsp; &nbsp; <input type="password" name="password" class="input" /></dt>
        <br> 
        <a href="forgot_pass.php">Forgot Password?</a>
        <br><br>  <input type="submit" name="loginBtn" value="Login" onClick="../login.php" class="button" />
    </dl>
    </form>

</div>
</body>
</html>

