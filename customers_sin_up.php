<?php
require 'connection.php';

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $Comfirm_Password=$_POST['Comfirm_Password'];
    $insert=$conn->query("INSERT INTO customers(fname,lname,email,phone,password,comfirm_password) VALUES('$fname','$lname','$email','$phone','$password','$comfirm_password')");
    
if($insert){
    header("location:customers_sin_in.php");
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
                <span>Have an account?<a href="customers_sin_in.php" onclick="login()">Login</a></span>
                <header>Sign up</header>
              </div>
              <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" name="fname" placeholder="Firstname">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" name="lname" placeholder="Lastname">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" name="email" placeholder="Email">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" name="phone" placeholder="Phone">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" name="password" placeholder="Password">
                    <i class="fa-solid fa-key"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" name="Comfirm_Password" placeholder="Comfirm Password">
                    <i class="fa-solid fa-key"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" name="submit" value="register">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" name="register-check" value="register-check">
                        <label for="register-check">Remember Me</label>
                    </div>
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