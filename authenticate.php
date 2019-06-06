<?php
@session_start();
require_once "functions/auth.php";

$email    = $_POST['email'];
$password = $_POST['password'];

$user_id = validate_User($email,$password);
if($user_id){
 log_in($user_id); 
 header("Location: home.php");
  exit("You are being redirected");
}else{
  if(stristr($_SERVER['PHP_SELF'], 'admin')){
   header("Location:../login.php?msg=1");
   exit("You are being redirected");
}else{
  header("Location: login.php?msg=1");
  exit("You are being redirected");
  }
}
