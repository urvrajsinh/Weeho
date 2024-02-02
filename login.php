<?php 
    session_start();
    if(isset($_POST["submit"]))  
    {  
         $_SESSION["name"] = $_POST["name"];  
         $_SESSION['last_login_timestamp'] = time();  
         
         header("location:dashboard.php?email=".$_POST['email']."");     
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login Page</title>
</head>
<body>
<?php 
    
    include("db_connect.php");

    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $result = mysqli_query($conn, "SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
        $row = mysqli_fetch_assoc($result);

        if(is_array($row) && !empty($row)){
            $_SESSION['valid'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['tel'] = $row['tel'];
            $_SESSION['id'] = $row['Id'];
            
            header("location:dashboard.php?email=".$_POST['email']."");     
            exit();
        } else {
            echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                  </div> <br>";
            
            // Check if the user doesn't exist based on email
            $verify_query = mysqli_query($conn, "SELECT Email FROM users WHERE Email='$email'");
            if (mysqli_num_rows($verify_query) == 0) {
                echo "<div class='message' id='signup-message'>
                          <p>Please Signup as you are a new user</p>
                      </div> <br>";
                echo "<script>
                        setTimeout(function(){
                            document.getElementById('signup-message').style.display = 'none';
                        }, 3000);
                      </script>";
            } else {
                echo "<script>window.location.href='login.php';</script>";
            }
        }
    }
?>

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
                            <a href="login.html">Mandeep Singh</a>
                            <a href="login.html">Rupali Bhattacharjee</a>
                            <a href="login.html">Naviin Gandharv</a>
                            <div class="dropdown-heading">Programs</div>
                            <a>Friends Party</a>
                            <a>Family Parties</a>
                            <a>Family Get-together</a>
                            <a>And Many More</a>
                        </div>
                    </div><br /><br />

                    <div class="forms-container">
                        <div class="signin-signup">
                            <form action="" class="sign-up-form" method="post">
                                <h2 class="title">Login</h2>

                                <div class="input-field">
                                    <i class='fas fa-envelope'></i>
                                    <img src="images/email.png" alt="">
                                    <input type="text" name="email" id="email" autocomplete="off" required placeholder="Email">
                                </div>

                                <div class="input-field">
                                    <i class='fas fa-lock'></i>
                                    <img src="images/padlock.png" alt="">
                                    <input type="password" name="password" id="password" placeholder="Password">
                                    <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
                                </div>

                                <a href="forgetpass.html" class="forgot-password">Forget Password?</a>
                                <div class="field">
                                    <button type="submit" class="btn" name="submit" value="SIGN UP" required>Sign In</button>
                                </div>
                                <p class="bottom-text">
                                    Don't have an account? <a href="signup.php">Sign up here</a>
                                </p>
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

                </div>
            </header>
        </div>
    </div>

</body>
</html>
