<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="jquery.js"></script>  
    <style>
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .section-icon {
            width: 100px; /* Set the width */
            height: 100px; /* Set the height */
        }
    </style>
    <title>Weeho Dashboard</title>
</head>
<body>
    <div class="logo-container">
        <div class="logo">
            <img src="images/Weeho.png" alt="Logo">
        </div>
    </div>
    <div class="hero-heading">
        <br /><br><br /><br><br /><br><br /><br>
        <h1>Dashboard</h1>
    </div>
    <div class="section-container">
        <div class="section" id="bookanevent">
            <a href='<?php echo "bookanevent.php?email=".$_GET['email']."";?>'>
                <div class="box">
                    <img src="images/bookanevent.jpeg" alt="bookanevent Icon" class="section-icon">
                    <h3>Book an event</h3>
                </div>
            </a>
        </div>        

        <div class="section" id="performers">
            <a href="performers.html">
                <div class="box">
                    <img src="images/performers.jpeg" alt="performers Icon" class="section-icon">
                    <h3>Performers</h3>
                </div>
            </a>
        </div>
    </div>

    <div class="section-container">
        <div class="section" id="history">
            <a href='<?php echo "history.php?email=".$_GET['email']."";?>'>
                <div class="box">
                    <img src="images/history.jpeg" alt="history Icon" class="section-icon">
                    <h3>History</h3>
                </div>
            </a>
        </div>

        <div class="section" id="contactus">
            <a href='<?php echo "contactus.php?email=".$_GET['email']."";?>'>
                <div class="box">
                    <img src="images/contactus.jpeg" alt="contactus Icon" class="section-icon">
                    <h3>Contact us</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="section-container center-container"> <!-- Added class center-container -->
        <div class="section" id="logout"> <!-- Changed the ID to "logout" for uniqueness -->
            <a href="login.php">
                <div class="box">
                    <img src="images/logout.jpeg" alt="Logout Icon" class="section-icon">
                    <h3>Logout</h3>
                </div>
            </a>
        </div>
    </div>
</body>
<?php  
      session_start();  
      if(isset($_SESSION["name"]))  
      {  
           if((time() - $_SESSION['last_login_timestamp']) > 180) // 180 = 3 * 60
           {  
                header("location:logout.php");  
           }  
           else  
           {  
                $_SESSION['last_login_timestamp'] = time();  
                
           }  
      }  
      else  
      {  
           header('location:login.php');  
      }  
      ?>  
</html>
