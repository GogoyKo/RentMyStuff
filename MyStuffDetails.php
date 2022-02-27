<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$name = mysqli_real_escape_string($con, $_POST['name']);
	$contact = mysqli_real_escape_string($con, $_POST['contact']);
	$address = mysqli_real_escape_string($con, $_POST['address']);
	$image = mysqli_real_escape_string($con, $_POST['image']);
	$price = mysqli_real_escape_string($con, $_POST['price']);
	$status = mysqli_real_escape_string($con, $_POST['status']);

	
	
		$sql = mysqli_query($con, "INSERT INTO rentmystufftable (name, contact, address, stuff_name, stuff_image, stuff_rent_price, stuff_status) VALUES ('$name','$contact','$address','$image','$price','0')");
		
}


?>