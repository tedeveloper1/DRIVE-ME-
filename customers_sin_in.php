<?php 
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$email=$_POST['email'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require 'connection.php';

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT email, password FROM customers WHERE email=? AND password=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt -> bind_param("ss", $email, $password);
$stmt -> execute();
$stmt -> bind_result($email, $password);
$stmt -> store_result();

if ($stmt->fetch())  //fetching the contents of the row
{
    
	$_SESSION['email']=$email; // Initializing Session
	header("location:User_Dash_Board.php");// Redirecting To Other Page
} else {
  $error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2a421485f4.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="assets/css/form.css">
    <title>Login here</title>
</head>
<body>
    <header>
        <a href="#" class="logo">Drive Me</a>
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar"><i class="fa-solid fa-bars"></i></label>
        <div class="nav-bar">
            <ul>
                <li><a href="index.php"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="#"><i class="fa-solid fa-handshake"></i>Services</a></li>
                <li><a href="#"><i class="fa-solid fa-motorcycle"></i>Moto</a></li>
                <li><a href="#"><i class="fa-solid fa-taxi"></i>Taxi</a></li>
                <li><a href="#"><i class="fa-solid fa-user"></i>User</a></li>
            </ul>
        </div>
    </header>

    <section>
        <form   method="POST">
        <div class="form-box">
            <div class="registration-form" id="reg">
              <div class="top">
                <span>Have an account?<a href="#" onclick="login()">Login</a></span>
                <header>Sign up</header>
              </div>
              <div class="two-forms">
               
                
                <div class="input-box">
                    <input type="text" class="input-field" name="email" placeholder="Email">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                
                <div class="input-box">
                    <input type="password" class="input-field" name="password" placeholder="Password">

                    <?php echo $error?>
                    <i class="fa-solid fa-key"></i>
                </div>
                
                <div class="input-box">
                    <input type="submit" class="submit" name="submit" value="register">
                </div>
                <div class="two-col">
                    <div class="two">
                        <label><a href="#">Terms & Conditions</a></label>
                    </div>
                </div>
              </div>
            </div>
        </div>
        </form>
    </section>

    <footer>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-threads"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="navbar">
            <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">User</a></li>
            <li><a href="#">Help center</a></li>
        </ul>
        <div class="languages"></div>
        <div class="lst">
            <p>Copyright &copy;<?php echo date("Y"); ?>Designed by <span class="designer">DM group</span></p>
           
        </div>
        </div>
    </footer>
</body>
</html>