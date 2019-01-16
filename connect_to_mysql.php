<?php  
define('DB_HOST', 'institute-helper.cad2e6ufd10s.us-east-1.rds.amazonaws.com'); 

define('DB_NAME', 'institute_helper'); 

define('DB_USER','root'); 

define('DB_PASSWORD','Password1'); 

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_connect_error());

$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_error());
	?>