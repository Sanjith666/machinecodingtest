<?php 

session_start();

if (!isset($_SESSION['username'])) 
if (!isset($_SESSION['email'])) {
   
    header("Location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1 style='text-align': center; margin-top: 200pc'>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <?php echo "<h1>" . $_SESSION['email'] . "</h1>"; ?>
    <a href="logout.php"><button> Logout</button></a>
   
</body>
</html>