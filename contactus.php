
<?php

    include("db_connect.php");
        $email = $_GET['email'];
       
        $sql = "SELECT * FROM users WHERE Email='$email' ";
        $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $name = $row["name"];
    $email = $row["email"];
    $tel = $row["tel"];
   
  }
} else {
  echo "0 results";
}
if (isset($_POST['submit'])) {
   
    $text = $_POST['text'];
    
    $sql = "INSERT INTO contact_us(name, email, tel,text) values ( '$name','$email','$tel','$text')";
   
   if ($conn->query($sql) === TRUE) {
   
    $querySuccess = true;

   
  } else {
    $querySuccess = false;
    echo "<script>alert('Error: ' . $sql . '<br>' . $conn->error;');</script>";
   
  }
}
?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/bookanevent.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .profile-icon img {
            border-radius: 50%;
            max-height: 40px; /* Adjust as needed */
        }
        .user-icon {
            position: absolute;
            top: 10px;
            right: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 20px; /* Adjust as needed */
            font-weight: bold;
        }
        .footer p {
            font-weight: bold;
        }
    </style>
    <title>Contact us form</title>
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
                    <div class="profile-icon profile-small user-icon">
                        <img src="images/profile-icon.jpeg" alt="Profile Icon">
                    </div>                    
                    <div class="hamburger-icon">
                        <i class="fa fa-bars"></i>
                        <div class="dropdown-menu" id="dropdownMenu">
                            <div class="dropdown-heading">Welcome to Weeho <br> <a href="https://www.weeho.in/">www.weeho.in</a></div>
                            <div class="dropdown-heading">Performers</div>
                            <a href="mandeep.html">Mandeep Singh</a>
                            <a href="rupali.html">Rupali Bhattacharjee</a>
                            <a href="naviin.html">Naviin Gandharv</a>
                            <div class="dropdown-heading">Programs</div>
                            <a>Friends Party</a>
                            <a>Family Parties</a>
                            <a>Family Get-together</a>
                            <a>And Many More</a>
                        </div>
                    </div><br /><br />
                    <div class="forms-container">
                        <div class="signin-signup">
                            <form method="post" class="sign-up-form" id="contactForm">
                            
                                <h2 class="title">Fill the form</h2>
                                <p class="para">Please enter below details</p>
                                <div class="input-field">
                                    <i class='fas fa-user'></i>
                                    <img src="images/user.png" alt="">
                                    <input type="text" name="name" id="name" placeholder="Name" value='<?php echo $name;?>' disabled>
                                </div>
                                <div class="input-field">
                                  <i class='fas fa-envelope'></i>
                                  <img src="images/email.png" alt="">
                                  <input type="email" name="email" id="email" placeholder="Email" value= '<?php echo $email;?>' disabled>
                                </div>
                                <div class="input-field">
                                    <i class='fas fa-envelope'></i>
                                    <img src="images/telephone.png" alt="">
                                    <input type="tel" name="tel" id="tel" placeholder="Phone number" value= '<?php echo $tel;?>' disabled>
                                </div>
                                <div class="input-field">
                                    <i class='fas fa-envelope'></i>
                                    <img src="images/schedule.png" alt="">
                                    <input type="text" name="text" id="text" placeholder="Text">
                                </div>                                                                                                                                                                                
                                <button type="submit" class="btn" name="submit" value="booknow" required>Submit</button>
 
                           

                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        <p>Contact us</p>
                        <p>+91 9883585647</p>
                        <p>contact@weeho.in</p>
                    </div>
                </div>
            </header>
        </div>



    
    </div>
    
    

    <script>
    // Use PHP variable to determine whether to show the alert
    <?php if (isset($querySuccess) && $querySuccess): ?>
        document.addEventListener('DOMContentLoaded', function () {
            // Function to show the popup message
            function showPopup() {
                alert("Thank you for contacting us, We will reach out soon!");
            }
            // Function to handle form submission
            function submitForm(event) {
                event.preventDefault(); 
                showPopup();
            }
            // Call the showPopup function
            showPopup();
        });
    <?php endif; ?>
</script>
	
	
    
</body>
</html>
