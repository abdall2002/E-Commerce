<?php  
session_start();

if(isset($_SESSION['Username']))

include("header1.php") ;
else
header("location:index.php");	
?>

<div class="wrapper gradient">
  <div class="hoc container clear"> 
    <div class="sectiontitle">
     <br>
	 <br>
      <h6 class="heading font-x2">The most important Product</h6>
    </div>
    <ul class="nospace group team">
<?php
				
include("config.php");
$username=$_SESSION['Username'];
$query="SELECT * FROM  booking where Booking.Username=users_Username";
$sql=mysqli_query($conn,$query); 
if(mysqli_num_rows($sql)>0)
{


while($row=mysqli_fetch_array($sql))
{ 
?>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="<?php echo  $row['PG_Photo'];?>" style="width:400px; height=300px" alt=""></a>
          <figcaption><strong>Name: <?php echo  $row['PG_Name'];?></strong> </figcaption>
		  <figcaption><strong>Phone: <?php echo  $row['PG_Phone'];?></strong> </figcaption>
		    <figcaption><strong>Email: <?php echo  $row['PG_Email'];?></strong> </figcaption>
		  <figcaption><strong>Status: <?php echo  $row['Status'];?></strong> </figcaption>

	  
        </figure>
      </li>
<?php }}?>
</div>

<!-- start footer     -->
<footer>
    <p>Copyright &copy; 2022 - All Rights Reserved -  E-Commerce</p>

</footer>
   <!-- End footer     -->