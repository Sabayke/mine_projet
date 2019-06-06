<?php
include 'header.php';
require_once('functions/database.php');
db_connect();

//If user already login then send to home page..
if(isset($current_user)){
 header("Location:home.php");
 exit("You are being redirected");
}
//Setup some variables/arrays
$action = array();
$action['result'] = null;
$text = array();

//Check if the form has been submitted..
if(isset($_POST['signup'])){
    //cleanup the variables
    //prevent mysql injection
	$fname    = mysql_real_escape_string($_POST['f-name']); 
	$mname    = mysql_real_escape_string($_POST['m-name']);
	$lname    = mysql_real_escape_string($_POST['l-name']);
	$fa_name    = mysql_real_escape_string($_POST['father_name']);
	$ma_name    = mysql_real_escape_string($_POST['mother_name']);
	$gender    = mysql_real_escape_string($_POST['gender']);
	$nationality    = mysql_real_escape_string($_POST['nationality']);
	$religion    = mysql_real_escape_string($_POST['religion']);
	$bloodgroup    = mysql_real_escape_string($_POST['blood_group']);
	$phoneno    = mysql_real_escape_string($_POST['phone_no']);
	$permanentaddress    = mysql_real_escape_string($_POST['permanent_address']);
	$email    = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$captcha  = mysql_real_escape_string($_POST['captcha']);

	//simple validation
	if(empty($fname)){$action['result'] = 'error'; array_push($text, 'You forgot your First Name');}
	//if($mname){$action['result']        = 'error'; array_push($text, 'You forgot your Middle Name');}
	if(empty($lname)){$action['result'] = 'error'; array_push($text, 'You forgot your Last Name');}
	
	if(empty($fa_name)){$action['result'] = 'error'; array_push($text, 'You forgot your Father Name');}
	
	if(empty($ma_name)){$action['result'] = 'error'; array_push($text, 'You forgot your Mother Name');}
	if(empty($gender)){$action['result'] = 'error'; array_push($text, 'You forgot your gender');}
	if(empty($nationality)){$action['result'] = 'error'; array_push($text, 'You forgot your Nationality');}
	if(empty($religion)){$action['result'] = 'error'; array_push($text, 'You forgot your Religion');}
	if(empty($bloodgroup)){$action['result'] = 'error'; array_push($text, 'You forgot your Blood group');}
	if(empty($phoneno)){$action['result'] = 'error'; array_push($text, 'You forgot your Phone no');}
	if(empty($permanentaddress)){$action['result'] = 'error'; array_push($text, 'You forgot your Permanent Address');}
	if(empty($password)){ $action['result'] = 'error'; array_push($text,'You forgot your password'); }
	if(empty($email)){ $action['result'] = 'error'; array_push($text,'You forgot your email'); }
	if($captcha != '13') {$action['result'] ='error'; array_push($text, 'Attention! Are you not human?');}
	
	// cheking email for not duplicate entry
	$email_Ck = mysql_num_rows(mysql_query("SELECT * FROM users WHERE email='".$email."'")); 
	if($email_Ck > 0){$action['result'] = 'error'; array_push($text,"Email has already been used.");
	}
	
	if($action['result'] != 'error'){
	
	 // Generate pseudo-random salt
	 $salt = sha1(microtime() .  $password);
	 // Generate password from salt
	 $password = sha1($salt .  $password);
	 // Insert user into the database
	  $query = "INSERT INTO `users` 
	            ( `first_name`, `m_name`, `last_name`, `father_name`, `mother_name`, `gender`,  `nationality`, `religion`, `blood_group`, `phone_no`, `permanent_address`, `email`,  `salt`,  `password`)
	            VALUES
	            ('$fname', '$mname', '$lname', '$fa_name', '$ma_name', '$gender',  '$nationality', '$religion', '$bloodgroup', '$phoneno', '$permanentaddress', '$email', '$salt', '$password')";
	 
	   $result = mysql_query($query);
	 
	   if(mysql_errno() === 0){
	     // Registration successful
	     //$user_id = mysql_insert_id();
	    // log_in($user_id);
	     header("Location: login.php?msg=3");
	     exit();
	   }
	}
	
    $action['text'] = $text;
}

?>
<div id="body_inner" class="index_box">
  
  <div class="box">
     <h2>Register</h2>
   <form method="post" action="register.php">
   
   <div class="login-form">
        
        <?=show_errors($action); ?>
   
        
        <label for="first-name">First Name</label>
        <input type="text" id="first-name" name="f-name" placeholder="First Name">
        
        <label for="middle-name">Middle Name</label>
        <input type="text" id="middle-name" name="m-name" placeholder="Middle Name"> 
        
		<label for="last-name">Last Name</label>
		<input type="text" id="last-name" name="l-name" placeholder="Last Name">     
   <label for="father-name">Father's Name</label>
		<input type="text" id="father-name"  name="father name" placeholder="Father's Name">  
        <label for="mother-name">Mother's Name</label>
		<input type="text" id="mother-name"  name="mother name" placeholder="Mother's Name">   
        <label for="gender">Gender</label>
		<input type="text" id="gender"  name="gender" placeholder="Gender">  
         
   <label for="nationality">Nationality</label>
		<input type="text" id="nationality" name="nationality" placeholder="Nationality">   
        
       <label for="religion">Religion</label>
		<input type="text" id="religion"  name="religion" placeholder="Religion"> 
        
         <label for="blood-group">Blood group</label>
		<input type="text" id="blood-group"  name="blood group" placeholder="Blood group">  
        
       <label for="phone-no">Phone no</label>
		<input type="text" id="phone-no" name="phone no" placeholder="Phone no"> 
        
         <label for="permanent-address">Permanent address</label>
		<input type="text" id="permanent-address" name="permanent address" placeholder="Permanent address"> 
      
      </div>
  <!-- Register -->
  
      <div class="register-form">
  
        <label for="email">E-mail Adress</label>
        <input type="email" id="email" name="email" placeholder="E-mail Address">
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password">
  
       <div class="captcha">
       
         <label for="captcha">What is <strong>10 + 3</strong>?</label>
         <input type="text" id="captcha" name="captcha" placeholder="Your answer">
  
       </div>
  
     </div>
	   
    <!-- Submit -->
       <input type="submit" id="submit" name="signup" value="Signup Now">
    <!-- Help -->
       <a href="login.php" class="login">Login!</a>
       
  </form>
  
   <!-- End Box -->
   </div>
    
</div>
<?php 
include 'footer.php';
?>