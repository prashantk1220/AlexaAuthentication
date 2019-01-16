<?php
	session_start();
	include "connect_to_mysql.php"; 

	$state = $_SESSION['state'];
	$redirect_uri = $_SESSION['redirect_uri'];

	$student_id = $_POST['student_id'];
	$Password = $_POST['Password'];
	$newquery = "SELECT student_id FROM student WHERE student_id = '$student_id' AND password = '$Password';";
	$retval = mysqli_query($con, $newquery);
	if(!$retval) {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
	    window.alert('Sorry you are not registered, please login as faculty or guest if you are not a student.')
	    window.location.href='index.php';
	    </SCRIPT>");
	}
	$new= "SELECT * from student where student_id = '$student_id' and password = '$Password';";
	$ret = mysqli_query($con, $new);
	$row = mysqli_fetch_assoc($ret);
	if ($row != NULL) {
		$access_token = bin2hex(random_bytes(10));
		$query = "UPDATE student SET access_token = '$access_token' WHERE student_id = '$student_id';";
		$set = mysqli_query($con, $query);
		$redirect_uri = $redirect_uri."#state=".$state."&access_token=".$access_token."&token_type=Bearer";
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.location.href='$redirect_uri';
		</SCRIPT>");
		//header("location: main.php"); // Redirecting To Other Page
	}
	else {
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
	    window.alert('Invalid student ID or password.')
	    window.location.href='index1.php';
	    </SCRIPT>");
	}
    mysqli_close($con); //Closing Connection 
?>