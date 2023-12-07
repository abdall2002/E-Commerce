

<?php  
include('header.php')

	
?>


<?php  
session_start();

	
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <link href="http://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="layout.css">
  <link rel="stylesheet" href="framework.css">
 


  <title>labtoby</title>  
</head>
<body>







<!--Start section-->
<section id="fold" style="width:100%; background-image: url(image/8-18.jpg);">
  <div class="container"><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h1 class="bc">The Best Lab For You</h1>
    <p>Put the capabilities of the laptop you want and leave the rest on us</p>
  </div>
  
</section>
<!--End section-->




<!--Start Our Services section-->
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
		  
	  <form method="post" action="">
	   
	  
	   <input type="hidden" name="Item_ID" value="<?php echo  $row['Item_ID'];?>">
	    <input type="submit" name="submit" value="Booking">
	   </form>
        </figure>
      </li>
<?php
}
}?>
    </ul>
  </div>
  <br>
  
  <?php 	
	
if(isset($_POST['submit']) and $_POST['submit'] == 'Booking')	
{
include 'config.php';

$Item_ID=$_POST['Item_ID'];
$username=$_SESSION['username'];

$query="INSERT INTO `booking` (`Item_ID`, `Username`, `Status`) VALUES ($Item_ID, '$username', 'Booking');";

if(mysqli_query($conn,$query))
{
?>
<script type="text/javascript">
alert("Logged in successfully");

</script>
<?php	

}
else
{
?>

<script type="text/javascript">
alert("No");

</script>

<?php
}
}
?>
</div>

<center><p class="login-register-text"> <a href="logout.php">Logout</a>.</p></center>

<!--start Contact-Us section-->
<section id="contact-us">
  <div class="head-section bgc">
    <h2 class="sc">Contact Us</h2>
  </div>
  <div class="container">
    <form action="">
      <div class="form-group">
        <label for="">Your Name</label>
        <input type="text" name="" id="">
      </div>
      <div class="form-group">
        <label for="">Your Email</label>
        <input type="text" name="" id="">
      </div>
      <div class="form-group">
        <label for="">Your Message</label>
        <textarea name="" id="" rows="10"></textarea>
      </div>
      <div class="form-group">
       <input type="submit" value="Send message" name="" id="">
      </div>
    </form>
  </div>
</section>



<!--End Contact-Us section-->

<!-- start footer     -->
<footer>
    <p>Copyright &copy; 2022 - All Rights Reserved -  E-Commerce</p>

</footer>
   <!-- End footer     -->

</body>




</html>