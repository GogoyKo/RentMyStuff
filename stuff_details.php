<?php
include "config.php";
 
$userid = $_POST['userid'];
 
$sql = "select * from rentmystufftable where id=".$userid;
$result = mysqli_query($con,$sql);
while( $row = mysqli_fetch_array($result) ){
?>
<table border='0' width='100%'>
<tr>
     <img src="<?php echo $row['stuff_image']; ?>" class="img-fluid mx-auto d-block" alt="...">
    <td style="padding:20px;">

 <input type="text" aria-label="location" value="<?php echo $row['name']; ?>" name="name" class="form-control">
 <input type="text" aria-label="location" value="<?php echo $row['contact']; ?>" name="contact" class="form-control">
 <input type="text" aria-label="location" value="<?php echo $row['address']; ?>" name="address" class="form-control">
 <input type="text" aria-label="location" value="<?php echo $row['stuff_name']; ?>" name="stuff_name" class="form-control">
 <input type="text" aria-label="location" value="<?php echo $row['stuff_rent_price']; ?>" name="stuff_rent_price" class="form-control">

    <p>Name : <?php echo $row['name']; ?></p>
    <p>Position : <?php echo $row['contact']; ?></p>
    <p>Office : <?php echo $row['address']; ?></p>
    <p>Age : <?php echo $row['stuff_name']; ?></p>
    <p>Salary : <?php echo $row['stuff_rent_price']; ?></p>
    </td>
</tr>
</table>
 
<?php } ?>