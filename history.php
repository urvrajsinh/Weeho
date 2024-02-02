<?php

    include("db_connect.php");
        $email = $_GET['email'];
       
        $sql = "SELECT * FROM book_an_event WHERE Email='$email' ";
        $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $tel = $row["tel"];
    $performer= $row["performer"];
    $dates= $row["dates"];
    $occasion= $row["occasion"];
    $info= $row["info"];
   
  }
} else {
  echo "0 results";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/history.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        


        /* Add shadow to all div elements inside the form */
    .sign-in-form .detail {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 5px;
        margin-bottom: 10px;
        border-radius: 8px;
    }

    /* Remove border from input fields */
    .sign-in-form input {
        border: none;
        outline: none;
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 10px;
        box-sizing: border-box;
        font-weight: bold;
    }

        /* Additional styles go here */
    </style>
    <title>History</title>
</head>

<body>
    <!-- Main Container -->
    <div class="main">
        <!-- Header Section -->
        <div class="wrapper light">
            <header class="header">
                <div class="logo">
                    <img src="images/Weeho.png" alt="Logo">
                </div>
                <div class="profile-icon profile-small">
                    <img src="images/profile-icon.jpeg" alt="Profile Icon">
                </div>
            </header>
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
        </div>    
    </div>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form class="sign-in-form">
                    <h1>Booking History</h1><br>
                    <!-- Inside your form -->
                    

                        <div class="detail">
                            <img src="images/telephone.png" alt="">
                            <strong>Number:</strong>
                            <input type="tel" name="tel" id="tel"  value= '<?php echo $tel;?>' disabled>   
                        </div><br>
                        <div class="detail">
                            <img src="images/location.png" alt="">
                            <strong>Category:</strong>
                            <input type="tel" name="performer" id="tel" placeholder="Phone number" value= '<?php echo $performer;?>' disabled>
                            <span id="phoneNumber"></span>
                        </div><br>
                        <div class="detail">
                            <img src="images/calendar (1).png" alt="">
                            <strong>Event date:</strong>
                            <input type="tel" name="dates" id="tel" placeholder="Phone number" value= '<?php echo $dates;?>' disabled>
                            <span id="city"></span>
                        </div><br>
                        <div class="detail">
                            <img src="images/famous.png" alt="">
                            <strong>Event:</strong>
                            <input type="tel" name="occasion" id="tel" placeholder="Phone number" value= '<?php echo $occasion;?>' disabled>
                            <span id="occasion"></span>
                        </div><br>
                        <div class="detail">
                            <img src="images/opportunity.png" alt="">
                            <strong>Occasion:</strong>
                            <input type="tel" name="info" id="tel" placeholder="Phone number" value= '<?php echo $info;?>' disabled>
                            <span id="eventName"></span>
                        </div>
                    </div>                                                      
                </form>
            </div>
        </div>
    </div>
    <!-- Scripts Section -->
    <script src="js/rupali.js"></script>
    <script>
        /* Additional scripts go here */
        document.addEventListener('DOMContentLoaded', function() {
            var dropdownIcon = document.querySelector('.fa-bars');
            var dropdownMenu = document.getElementById('dropdownMenu');

            dropdownIcon.addEventListener('click', function() {
                dropdownMenu.classList.toggle('show');
            });

            window.addEventListener('click', function(event) {
                if (!event.target.matches('.fa-bars')) {
                    if (dropdownMenu.classList.contains('show')) {
                        dropdownMenu.classList.remove('show');
                    }
                }
            });
        });
    </script>
</body>

</html>