
<?php  
include("header.php") ;
session_start();
$id=$_GET['id'];

include("config.php");


?>

 <div class="up" style="margin-top: 35px;margin-left: 35px;">
            
<form action=""method="post">
  Status
<select name="status" >
  
  <option value="accept">accept</option>
  <option value="refuse">refuse</option>
</select>
<input type="submit" value="Change Status" class="btn" name="submit">
</form>
</div>
<?php


?>

<?php

if(@$_POST['submit'] and $_POST['submit']=='Change Status' )
{
echo $id=$_GET['id'];
include("config.php");
echo $status=$_POST['status'];
$sql1="UPDATE `booking` SET `Status`='$status' WHERE `Booking_ID`=$id";
if(mysqli_query($conn,$sql1))
{
?>
<script type="text/javascript">
alert("Data has been successfully updated");

</script>
<?php
header("location:updatebooking.php");
}
else
{
	
?>
<script type="text/javascript">
alert(" The data is not update");

</script>
<?php
}
}


