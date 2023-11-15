<?php
include 'connection.php';
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['email'])) {
    header("Location: ");

}

// Other dashboard logic goes here
// ...

// Logout functionality

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_SESSION['email'];?></h1>
    <button><a href="logout.php">logout</a></button>
</body>
</html>