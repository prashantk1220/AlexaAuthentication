<?php
	session_start();
	include "connect_to_mysql.php"; 

	$state = $_SESSION['state'];
	$redirect_uri = $_SESSION['redirect_uri'];

	$guest_name = $_POST['guest_name'];
	$guest_email = $_POST['guest_email'];
    $query_select = "SELECT * FROM guest WHERE guest_email = '".$guest_email."';";
	$ret = mysqli_query($con, $query_select);
	$row = mysqli_fetch_assoc($ret);
	$access_token = bin2hex(random_bytes(10));
	$redirect_uri = $redirect_uri."#state=".$state."&access_token=".$access_token."&token_type=Bearer";
	if($row != NULL) {
		$query = "UPDATE guest SET access_token = '".$access_token."' WHERE guest_email = '".$guest_email."';";
		$set = mysqli_query($con, $query);
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.location.href='$redirect_uri';
		</SCRIPT>");
	}
	else {
		$query = "INSERT INTO guest VALUES ('$guest_name', '$guest_email', '$access_token');";
		$set = mysqli_query($con, $query);
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.location.href='$redirect_uri';
		</SCRIPT>");
	}
    mysqli_close($con); //Closing Connection 
?>