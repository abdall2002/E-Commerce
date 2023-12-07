<?php
include ('header.php')
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
</html>		
<?php


include("config.php");

$query="SELECT * FROM `item`";
$sql=mysqli_query($conn,$query); 
if(mysqli_num_rows($sql)>0)
{
	
?>

 <h2 class="heading" style="font-size:30"> All Item Status </h2>
      <p class="nospace btmspace-15">Please select an item to update status</p>
      <br>
      <table class="w3-table-all">
    <thead>
      <tr class="w3-red">
        <th>Product_Name </th>
        <th>Product_Description</th>

		 <th>Update</th>
		<th>Delete</th>
      </tr>
    </thead>
<?php
while($row=mysqli_fetch_array($sql))
{ 
?>

    <tr>
      <td><?php echo  $row['Item_Name'];?> </td>
      <td><?php echo  $row['Item_Description'];?> </td>
  
		 <td><a href="updateitem1.php?id=<?php echo  $row['Item_ID'];?>">Update<a></td>
		  <td><a href="deleteitem.php?id=<?php echo  $row['Item_ID'];?>">Delete<a></td>
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