<?php
// Checked in _header.php
$login_required = true; 
include_once('header.php');
//cheking user level 4
$level = check_levels('4');

?>
<style type="text/css">
body,td,th {
	font-family: "Times New Roman", Times, serif;
	font-size: 36px;
}
</style>
<div class="button" >
 <?php include 'button.php'; ?>
 </div>

<h1>&nbsp;</h1>
<h1>Welcome <?php echo $current_user['first_name'];
 ?>
</h1>

  <?php include 'footer.php'; ?>

