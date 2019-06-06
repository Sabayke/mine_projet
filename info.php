
<?php 
include 'header.php';
include 'footer.php';

//Dtabase connection..
include_once('functions/database.php');
//Helping functions..
include_once('functions/functions.php');
//call database connection
db_connect();

 function find_all_Users(){
 
    $sql    = "SELECT * FROM users";
    $result = mysql_query($sql);
    $row    = mysql_num_rows($result);
    
	if($row > 0 ){
		
	
	echo "<h2> All Teachers </h2>";
	
	while($row = mysql_fetch_array($result)) { 
	echo "<ul>";
	echo "<li><b>First name</b> :". $row['first_name']."</li>";
	echo "<li><b>Last name</b> :". $row['last_name']."</b></li>";
	echo "<li><b>Email</b> :". $row['email']."</li>";
	echo "</ul>";
	}//end while
	 
	
  } // if end 

}
// show all user
find_all_Users();


?>


