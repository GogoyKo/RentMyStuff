<?php
include("config.php");

if(isset($_FILES['image'])){

if($_SERVER["REQUEST_METHOD"] == "POST"){

$name = mysqli_real_escape_string($con, $_POST['name']);
$contact = mysqli_real_escape_string($con, $_POST['contact']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$stuff_name = mysqli_real_escape_string($con, $_POST['stuff_name']);
$stuff_rent_price = mysqli_real_escape_string($con, $_POST['price']);


	$file_name = $_FILES['image']['name'];
      $link = "Images/$file_name";
      $file_tmp =$_FILES['image']['tmp_name'];
      $variable = explode('.',$_FILES['image']['name']);
      $file_ext=strtolower(end($variable));
      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      if(empty($errors)==true){
         $sql = "INSERT INTO rentmystufftable (name, contact, address, stuff_name, stuff_image, stuff_rent_price,stuff_status) VALUES ('$name','$contact','$address','$stuff_name','$link','$stuff_rent_price',0)";
      mysqli_query($con,$sql);
         move_uploaded_file($file_tmp,"images/".$file_name);
        header("location:dashboard.php");
      }else{
         print_r($errors);
      }

}
}


?>