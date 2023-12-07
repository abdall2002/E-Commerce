<?php include("header.php");?>




<div class="wrapper gradient">
  <div class="hoc container clear"> 
    <div class="sectiontitle">
     <br>
	 <br>
      <h6 class="heading font-x2">Productt Details</h6>
    </div>
    <ul class="nospace group team">
<?php
				
include("config.php");
$id=$_GET['id'];
$query="SELECT * FROM `Item` where Item_ID=$id";
$sql=mysqli_query($conn,$query); 
if(mysqli_num_rows($sql)>0)
{


while($row=mysqli_fetch_array($sql))
{ 
?>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="admin/<?php echo  $row['Photo'];?>" style="width:400px; height=300px" alt=""></a>
          <figcaption><strong>Course Name: <?php echo  $row['Item_Name'];?></strong> </figcaption>
		  <figcaption><strong>Course Description: <?php echo  $row['Item_Description'];?></strong> </figcaption>
		   <a href="coursedetails.php?id=<?php echo  $row['Item_ID'];?>">More</a>
	  
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