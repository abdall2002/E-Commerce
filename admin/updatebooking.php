
<?php  
include("header.php") ;

?>

<!--Start section-->
<section id="fold" style="width:100%; background-image: url(image/8-18.jpg);">
  <div class="container"><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h1 class="bc">The Best Lab For You</h1>
    <p>Put the capabilities of the laptop you want and leave the rest on us</p>
  </div>
  
</section>

<!--End section-->



<div class="wrapper row2">
  <section id="ctdetails" class="hoc container clear"> 
   <div class="one_quarter1"> &nbsp;&nbsp; </div>
   <article class="three_quarter">
<br>
<br>
     
<?php
				

include("config.php");

$query="SELECT * FROM `booking`";
$sql=mysqli_query($conn,$query); 
if(mysqli_num_rows($sql)>0)
{
	
?>

 <h2 class="heading" style="font-size:30"> All availability status </h2>
      <p class="nospace btmspace-15">Please select an appointment to update status</p>
      <table class="w3-table-all">
    <thead>
      <tr class="w3-red">
        <th>Booking </th>
        <th>Cutomer username</th>
         <th>Status</th>
		 <th>Update</th>
		
      </tr>
    </thead>
<?php
while($row=mysqli_fetch_array($sql))
{ 
?>

    <tr>
      <td><?php echo  $row['Booking_ID'];?> </td>
      <td><?php echo  $row['Username'];?> </td>
   <td><?php echo  $row['Status'];?> </td>
		 <td><a href="updatebooking1.php?id=<?php echo  $row['Booking_ID'];?>">Update<a></td>
		 
    </tr>
    
	
<?php 
}
?>
</table>
    </div>
<?php
}
else
echo "<h2>There are no dates recorded in the database</h2>";	


?>
	 
  </section>

 </article>

</div>
<!-- start footer     -->
<footer>
    <p>Copyright &copy; 2022 - All Rights Reserved -  E-Commerce</p>

</footer>
   <!-- End footer     -->