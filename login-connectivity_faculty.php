<?php
	session_start();
	include "connect_to_mysql.php";

	$state = $_SESSION['state'];
	$redirect_uri = $_SESSION['redirect_uri'];

	$faculty_id = $_POST['faculty_id'];
	$Password = $_POST['Password'];
	$newquery = "SELECT faculty_id from faculty where faculty_id = '$faculty_id' and password = '$Password';";
	$retval = mysqli_query($con, $newquery);
	if(!$retval) {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
	    window.alert('Sorry you are not registered, please login as faculty or guest if you are not a faculty.')
	    window.location.href='index.php';
	    </SCRIPT>");
	}
	$new= "SELECT * from faculty where faculty_id = '$faculty_id' and password = '$Password';";
	$ret = mysqli_query($con, $new);
	$row = mysqli_fetch_assoc($ret);
	if ($row != NULL) {
		$access_token = bin2hex(random_bytes(10));
		$query = "UPDATE faculty SET access_token = '$access_token' WHERE faculty_id = '$faculty_id';";
		$set = mysqli_query($con, $query);
		$redirect_uri = $redirect_uri."#state=".$state."&access_token=".$access_token."&token_type=Bearer";
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.location.href='$redirect_uri';
		</SCRIPT>");
		//header("location: main.php"); // Redirecting To Other Page
	}
	else {
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
	    window.alert('Invalid faculty ID or password.')
	    window.location.href='index1.php';
	    </SCRIPT>");
	}
    mysqli_close($con); //Closing Connection 
?>