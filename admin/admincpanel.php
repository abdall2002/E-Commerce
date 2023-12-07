<?php  
session_start();

if(isset($_SESSION['Username']))
include("header.php") ;
else
header("location:index.php");	
?>
<html>
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="media.css">

	<title>admincpanel</title>
</head>
<!--Start section-->
<section id="fold" style="width:100%; background-image: url(image/8-18.jpg);">
  <div class="container"><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h1 class="bc">The Best Lab For You</h1>
    <p>Put the capabilities of the laptop you want and leave the rest on us</p>
  </div>
  
</section>

<!--End section-->
<body>
<div>
<section>
<?php
    if(isset($_SESSION['Username']))
    {
        echo ' <h2> Wellcome ' . $_SESSION['Username'].'</h2><br/>';
        
    }
    else
    {
        header("location:index.php");
    }
?>


 
 <h2> Please select item
      <ul class="">
        <li class="active"><a href="index.php">Home</a></li>
        
      
        <li><a href="">Product</a></li>
		<ul>
		<li><a href="additem.php">Add</a></li>
		
		  <li><a href="updateitem.php">Update</a></li>
		  <li><a href="updateitem.php">Delete</a></li>
		  <li><a href="updatebooking.php">Status</a></li>

		</ul>
		</li>
    
      </ul>
	  <h2>
  </section>


</div>

<!-- start footer     -->
<footer>
    <p>Copyright &copy; 2022 - All Rights Reserved -  E-Commerce </p>

</footer>
   <!-- End footer     -->
</body>

</html>