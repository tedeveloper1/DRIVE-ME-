<?php
include 'connection.php';
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['id'])) {
    header("Location: customers_sin_in.php");
    exit();
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
    <button><a href="logout.php">logout</a></button>
</body>
</html>