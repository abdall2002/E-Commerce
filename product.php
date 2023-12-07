<?php include("header.php")?>

<!--Start section-->
<section id="fold" style="width:100%; background-image: url(image/8-18.jpg);">
  <div class="container"><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h1 class="bc">The Best Lab For You</h1>
    <p>Put the capabilities of the laptop you want and leave the rest on us</p>
  </div>
  
</section>

<!--End section-->





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

$query="SELECT * FROM `Item` ";
$sql=mysqli_query($conn,$query); 
if(mysqli_num_rows($sql)>0)
{


while($row=mysqli_fetch_array($sql))
{ 
?>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="admin/<?php echo  $row['Photo'];?>" style="width:400px; height=300px" alt=""></a>
          <figcaption><strong>Product Name: <?php echo  $row['Item_Name'];?></strong> </figcaption>
		  <figcaption><strong>Product Description: <?php echo  $row['Item_Description'];?></strong> </figcaption>
		   <a href="login.php?id=<?php echo  $row['Item_ID'];?>">More</a>
	  
        </figure>
      </li>
<?php
}
}?>
    </ul>
  </div>
  <br>
<br>
</div>

<!-- start footer     -->
<footer>
    <p>Copyright &copy; 2022 - All Rights Reserved -  E-Commerce</p>

</footer>
   <!-- End footer     -->