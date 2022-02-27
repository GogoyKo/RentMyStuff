<?php
include "config.php";



 
$userid = $_POST['userid'];
 
$sql = "select * from rentmystufftable where id=".$userid;
$result = mysqli_query($con,$sql);




while( $row = mysqli_fetch_array($result) ){
?>





<!DOCTYPE html> 

<html lang="en">
<body>
<table border='0' width='100%'>
<tr>
     <img src="<?php echo $row['stuff_image']; ?>" class="img-fluid mx-auto d-block" alt="...">
    <td style="padding:20px;">
 <form method="POST" action="location.php">
  <input type="text" hidden="yes" aria-label="location" value="<?php echo $row['id']; ?>" name="id" class="form-control">
 <input type="text" aria-label="location" value="<?php echo $row['name']; ?>" name="name" class="form-control">
 <input type="text" aria-label="location" value="<?php echo $row['contact']; ?>" name="contact" class="form-control">
 <input type="text" aria-label="location" value="<?php echo $row['address']; ?>" name="address" class="form-control">
 <input type="text" aria-label="location" value="<?php echo $row['stuff_name']; ?>" name="stuff_name" class="form-control">
 <input type="text" aria-label="location" value="<?php echo $row['stuff_rent_price']; ?>" name="stuff_rent_price" class="form-control">
 
   


   <button data-id='<?php echo $row['id']; ?>' class="userinfo btn btn-success">Update</button>
    </form>


    </td>
</tr>
</table>

 
<?php
 }




 ?>







</body>


</html>