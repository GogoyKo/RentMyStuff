<?php

include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$id = mysqli_real_escape_string($con, $_POST['id']);
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$contact = mysqli_real_escape_string($con, $_POST['contact']);
	$address = mysqli_real_escape_string($con, $_POST['address']);
	$stuff_name = mysqli_real_escape_string($con, $_POST['stuff_name']);
	$stuff_rent_price = mysqli_real_escape_string($con, $_POST['stuff_rent_price']);

	

   $sql = "UPDATE rentmystufftable SET name='$name',contact='$contact',address='$address',stuff_name='$stuff_name',stuff_rent_price='$stuff_rent_price' WHERE id='$id'";

	$query = mysqli_query($con, $sql);

	
}

?>