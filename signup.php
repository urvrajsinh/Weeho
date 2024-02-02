<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <title>Signup Page</title>
</head>
<body>
      
        <div class="main">
        <div class="wrapper light">
          
            <header>

                <div class="container">
                    <div class="logo-container">
                        <div class="logo">
                            <img src="images/Weeho.png" alt="Logo">
                        </div>
                    </div>
                    <div class="hamburger-icon">
                        <i class="fa fa-bars"></i>
                        <div class="dropdown-menu" id="dropdownMenu">
                            <div class="dropdown-heading">Welcome to Weeho <br> <a href="https://www.weeho.in/">www.weeho.in</a></div>
                            <div class="dropdown-heading">Performers</div>
                            <a href="#">Mandeep Singh</a>
                            <a href="#">Rupali Bhattacharjee</a>
                            <a href="#">Naviin Gandharv</a>
                            <div class="dropdown-heading">Programs</div>
                            <a>Friends Party</a>
                            <a>Family Parties</a>
                            <a>Family Get-together</a>
                            <a>And Many More</a>
                        </div>
                    </div><br /><br />
                    



<div class="forms-container">
<div class="signin-signup">
<form method="post" class="sign-up-form">


<h2 class="title">Create new account</h2>
<div class="input-field">

<i class='fas fa-user'></i>
                <img src="images/user.png" alt="">
<input type="text" name="name" id="name" autocomplete="off" required placeholder="Name" >
</div>

<div class="input-field">
<i class='fas fa-envelope'></i>
                <img src="images/telephone.png" alt="">

<input type="tel" name="tel" id="tel" pattern="[0-9]{10}" placeholder="Phone number">

</div>
<div class="input-field">
        <i class='fas fa-envelope'></i>
        <img src="images/email.png" alt="">
        <input type="text" name="email" id="email" autocomplete="off" required placeholder="Email">
</div>

<div class="input-field">
                            <i class='fas fa-lock'></i>
                            <img src="images/padlock.png" alt="">
                            <input type="password" name="password" id="password" placeholder="Password">
                            <i class="fas fa-eye toggle-password" onclick="togglePassword('password')"></i>
                        </div>



            <div class="input-field">
                            <i class='fas fa-lock'></i>
                            <img src="images/padlock.png" alt="">
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                            <i class="fas fa-eye toggle-password" onclick="togglePassword('confirm_password')"></i>
                        </div>

            

           
<div class="field">

<button type="submit" class="btn" name="submit" value="SIGN UP" required>Sign Up</button>
</div>
<p class="bottom-text">
Already a member? <a href="login.php">Log in here</a>
</p>
<?php
                        include("db_connect.php");

                        if (isset($_POST['submit'])) {
                            $name = $_POST['name'];
                            $tel = $_POST['tel'];
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $confirm_password = $_POST['confirm_password'];

                            if ($password !== $confirm_password) {
                                echo '<p style="color: white;background-color:red;">Passwords do not match!</p>';
                            } else {
                                // Verifying the unique email
                                $verify_query = mysqli_query($conn, "SELECT Email FROM users WHERE Email='$email'");

                                if (mysqli_num_rows($verify_query) != 0) {
                                    echo '<p style="color: white;background-color:red;">This email is used, Try another One Please!</p>';
                                } else {
                                    mysqli_query($conn, "INSERT INTO users(Name, Tel, Email, Password) VALUES('$name','$tel','$email','$password')") or die("Error Occurred");
                                    header("Location: login.php");
                                    exit();
                                }
                            }
                        }
                        ?>


</form>
</div>

</div>


<script>
  function togglePassword() {
    var passwordInput = document.getElementById("password");
    var eyeIcon = document.querySelector(".toggle-password");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      eyeIcon.classList.remove("fa-eye");
      eyeIcon.classList.add("fa-eye-slash");
    } else {
      passwordInput.type = "password";
      eyeIcon.classList.remove("fa-eye-slash");
      eyeIcon.classList.add("fa-eye");
    }
  }
</script>
<script>
        function togglePassword(inputId) {
            var passwordInput = document.getElementById(inputId);
            var eyeIcon = document.querySelector("." + inputId + "-toggle-password");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>

</body>
</html>



