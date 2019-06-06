<?php
// Checked in _header.php
$login_required = true; 
include_once('header.php');
//cheakin staff level 2
$level = check_levels('3');
if($level == "3"){
   $cg_user = " Teacher ";
}

?>

<h1>Teacher AREA</h1>

<?php include 'footer.php'; ?>