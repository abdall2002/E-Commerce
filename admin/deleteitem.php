
<?php

include("config.php");
$id=$_GET['id'];

$sql="DELETE FROM `Item` WHERE `Item_ID`=$id";
if(mysqli_query($conn,$sql))
{
?>
<script>
alert("The data is deleted ");

</script>
<?php
header("location:updateitem.php");

}
else
{
?>

<script>
alert("The data is not delete ");

</script>
<?php
}
?> 