
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
				
$id=$_GET['id'];
include("config.php");

$query="SELECT * FROM `Item` WHERE `Item_ID`=$id";
$sql=mysqli_query($conn,$query); 
if(mysqli_num_rows($sql)>0)
{
?>

      <h2 class="heading" style="font-size:30"> Update  availability a Product</h2>
      <p class="nospace btmspace-15">Please Entering New availability a Product information</p>
	  
	  
<?php
while($row=mysqli_fetch_array($sql))
{ 
?>	  
     <form method="post" action="" id="contactform" enctype="multipart/form-data">
        <fieldset>
          
		   <label for="name">Course Name<span>*</span></label>
					
		<input type="text" value="<?php echo  $row['Item_Name'];?>" name="Item_Name" required>
			 
			 
		 <label for="name">Course_Description<span>*</span></label>
          <input type="text" value="<?php echo  $row['Item_Description'];?>" name="Item_Description" required>
		  
  
		  
		   <label >Upload his picture  <span>*</span></label>
             <input type="file" name="upload" required class="form-control" >
		  
           <input type="submit" name="submit" value="Update">
        </fieldset>
      </form>
<?php }}?>
  </section>
  
  <?php 	
if(@$_POST['submit'] and $_POST['submit']=='Update' )
{
include("config.php");

$Item_Name=$_POST['Item_Name'];
$Item_Description=$_POST['Item_Description'];



$filetempname=$_FILES['upload']['tmp_name'];
$filename=$_FILES['upload']['name'];
$type=$_FILES['upload']['type'];
$error=$_FILES['upload']['error'];

$random=rand(0,99);
$url=date('d-m-y').$random.$filename;
$uploadDirectory=dirname(__FILE__).'/uploaded/';
$datapage['page_image']   = $uploadDirectory.$url;

$destination=$uploadDirectory.date('d-m-y').$random.$filename;
move_uploaded_file($filetempname, $destination);
$Photo='uploaded/'.date('d-m-y').$random.$filename;



$sql1="UPDATE `Item` SET `Item_Name`='$Item_Name',
`Item_Description`='$Item_Description',`Photo`='$Photo' WHERE `Item_ID`=$id";
if(mysqli_query($conn,$sql1))
{
?>
<script type="text/javascript">
alert(" Data has been successfully updated");

</script>
<?php
header("location:updateitem.php");
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
	
?>
 </article>

</div>
<!-- start footer     -->
<footer>
    <p>Copyright &copy; 2022 - All Rights Reserved -  E-Commerce</p>

</footer>
   <!-- End footer     -->