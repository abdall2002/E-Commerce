<?php include("header.php");?>


<html>
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="media.css">

	<title>Add</title>
</head>
<!--Start section-->
<section id="fold" style="width:100%; background-image: url(image/8-18.jpg);">
  <div class="container"><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h1 class="bc">The Best Lab For You</h1>
    <p>Put the capabilities of the laptop you want and leave the rest on us</p>
  </div>
  
</section>




<div class="wrapper row2">
  <section id="ctdetails" class="hoc container clear"> 
   <div class="one_quarter1"> &nbsp;&nbsp; </div>
   <article class="three_quarter">
<br>
<br>
      <h2 class="heading" style="font-size:30">Add Product</h2>
      <p class="nospace btmspace-15">Please entering Product information</p>
	  

      	<form method="post" action="" id="contactform" enctype="multipart/form-data">
        <fieldset>
          
		<label for="name">Name<span>*</span></label>
					
		<input type="text"  value="" name="Item_Name" required>
		<br> 
		  <label for="name">Description<span>*</span></label>
      <br>
          <input type="text"  name="Item_Description" required>
		  <br>
		
		   <label >Upload his picture  <span>*</span></label>
          
       <input type="file" name="upload" required class="form-control" >
		  <br>
           <input type="submit" name="submit" value="Add">
        </fieldset>
      </form>
 
  </section>
</div>
  
<?php 	
if(@$_POST['submit'] and $_POST['submit']=='Add' )
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
$PG_Photo='uploaded/'.date('d-m-y').$random.$filename;

$sql1="INSERT INTO `item` ( `Item_Name`, `Item_Description`, `Photo`) VALUES ( '$Item_Name', '$Item_Description', '$PG_Photo');";
if(mysqli_query($conn,$sql1))
{
?>
<script type="text/javascript">
alert("Product has been successfully added");

</script>
<?php
}
}?>
	
	
  </article>

</div>
<!-- start footer     -->
<footer>
    <p>Copyright &copy; 2022 - All Rights Reserved -  E-Commerce</p>

</footer>
   <!-- End footer     -->
   