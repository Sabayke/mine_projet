<?php
// Checked in _header.php
$login_required = true; 
include_once('header.php');
//cheakin staff level 2
$level = check_levels('2');
if($level == "2"){
   $cg_user = "Pro user ";
}
?>

<h1>STAFF AREA</h1>

<?php include 'footer.php'; ?>