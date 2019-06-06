<?php
include 'header.php';
require_once('functions/database.php');
db_connect();

$con = mysql_connect("localhost","root","");
mysql_select_db("school_databasae", $con);
$query = "SELECT * from users WHERE first_name= admin";
$result = mysql_query($query);
 ?>