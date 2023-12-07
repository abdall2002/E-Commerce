<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="welcome.css">

    <title>Welcome</title>
</head>
<body>
<script>alert('Completely!!!.')</script>";
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php" >Logout</a>
    <a href="index.php">home page</a>

</body>
</html>