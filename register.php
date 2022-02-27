<?php

include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$contact = mysqli_real_escape_string($con, $_POST['contact']);
	$address = mysqli_real_escape_string($con, $_POST['address']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	
	$query = mysqli_query($con, "SELECT * FROM user_info WHERE email = '$email'");

	$result = mysqli_num_rows($query);

	if($result >0){
		echo "email already signed in. Please try other email.";
	}else{
		$sql = mysqli_query($con, "INSERT INTO user_info (fname, contact, address, email, password, account_status) VALUES ('$fname','$contact','$address','$email','$password','1')");
		echo "Successfully Register";
		 header('location:dashboard.php');
	}
}

?>