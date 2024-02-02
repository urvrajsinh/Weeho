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
    $dates= $_POST['dates'];
    $occasion= $_POST['occasion'];
    $info= $_POST['info'];
    $performer= $_POST['performer'];
    
    
    $sql = "INSERT INTO book_an_event(name, email, tel,	dates, occasion, info, performer) values ('$name', '$email', '$tel', '$dates', '$occasion', '$info', '$performer' )";
   
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    
    
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Your custom styles can go here */
        #stateSelect {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url('path_to_your_custom_arrow_icon.png');
            background-repeat: no-repeat;
            background-position-x: 95%;
            background-position-y: 50%;
            padding-right: 2em;
            border: 1px solid #ccc;
            background-color: #fff;
            color: #acacac;
        }
        #selectOccasion {
            border: 1px solid #ccc;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url('path_to_your_custom_arrow_icon.png');
            background-repeat: no-repeat;
            background-position-x: 95%;
            background-position-y: 50%;
            padding-right: 2em;
            background-color: #fff;
            color: #acacac;
        }
        #stateSelect {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-image: url('path_to_your_custom_arrow_icon.png');
        background-repeat: no-repeat;
        background-position-x: 95%;
        background-position-y: 50%;
        padding-right: 2em;
        border: 1px solid #ccc;
        background-color: #fff;
        color: #acacac;
    }

    /* Add some space below the form elements */
    .mb-3 {
        margin-bottom: 1rem;
    }

    /* Style the label for the occasion dropdown */
    .input-group-text {
        font-weight: bold;
        background-color: #f8f9fa; /* Light gray background color */
    }

    .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            padding: 12px 16px;
            display: block;
            cursor: pointer;
        }

        .input-field.active .dropdown-content {
            display: block;
        }
        #occasion-dropdown {
            display: none;
            position: absolute;
            background-color: orangered;
            color:white;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        #occasion-dropdown a {
            padding: 12px 16px;
            display: block;
            cursor: pointer;
        }

        .input-field.active #occasion-dropdown {
            display: block;
        }
/* Additional styles for the new input field */
        #performer-dropdown {
            display: none;
            position: absolute;
            background-color: orangered;
            color:white;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        #performer-dropdown a {
            padding: 12px 16px;
            display: block;
            cursor: pointer;
        }

        .input-field.active #performer-dropdown {
            display: block;
        }
        /* Add the following styles to your existing styles in the <style> tag */

/* Style the button */
.btn-primary {
    background-color: orangered; /* Set button color */
    border-radius: 20px; /* Set border radius for a rounded shape */
    padding: 10px 20px; /* Add some padding for better appearance */
    color: white; /* Set text color to white */
    border: none; /* Remove default button border */
}

/* Style the button on hover */
.btn-primary:hover {
    background-color: darkorange; /* Change color on hover */
}

    </style>

    <title>Book an event form</title>
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
                            <form class="sign-up-form" method="post">
                                <h2 class="title">Book an event</h2>
                                <p class="para">Please enter your details below</p>

                                <!-- Bootstrap input groups for better styling -->
                                <div class="input-field">
                                    <i class='fas fa-user'></i>
                                    <img src="images/user.png" alt="">
                                    <input type="text" name="name" id="name" placeholder="Name" value='<?php echo $name;?>' disabled>
                                </div>

                                <div class="input-field">
                                    <i class='fas fa-envelope'></i>
                                    <img src="images/email.png" alt="">
                                    <input type="email" name="email" id="email" placeholder="Email" value='<?php echo $email;?>' disabled>
                                </div>

                                <div class="input-field">
                                    <i class='fas fa-envelope'></i>
                                    <img src="images/telephone.png" alt="">
                                    <input type="tel" name="tel" id="tel" placeholder="Phone number" value='<?php echo $tel;?>' disabled>
                                </div>

                                <div class="input-field" id="customInputField">
                                    <i class='fas fa-envelope'></i>
                                    <img src="images/calendar (1).png" alt="">
                                    <input type="option" name="dates" id="option" placeholder="Select any option from below" onclick="toggleDropdown()">
                                    <div class="dropdown-content">
                                        <a onclick="selectOption('Specific')">Specific</a>
                                        <a onclick="selectOption('Range')">Range</a>
                                        <a onclick="selectOption('NotSpecific')">Not Specific</a>
                                    </div>
                                </div>

                                <div class="input-field" id="occasionInputField">
                                    <i class='fas fa-envelope'></i>
                                    <img src="images/schedule.png" alt="">
                                    <input type="occasion" name="occasion" id="occasion" placeholder="Select an occasion" onclick="toggleOccasionDropdown()">
                                    <div id="occasion-dropdown">
                                        <a onclick="selectOccasion('Personal Parties')">Personal Parties</a>
                                        <a onclick="selectOccasion('Personal Ceremony')">Personal Ceremony</a>
                                        <a onclick="selectOccasion('Corporate Parties')">Corporate Parties</a>
                                        <a onclick="selectOccasion('Corporate Celebration')">Corporate Celebration</a>
                                        <a onclick="selectOccasion('MICE Events')">MICE Events</a>
                                        <a onclick="selectOccasion('Others')">Others</a>
                                    </div>
                                </div>
                                
                                
                                <div class="input-field">
                                    <i class='fas fa-envelope'></i>
                                    <img src="images/dancing.png" alt="">
                                    <input type="occasiondetail" name="info" id="occasiondetail" placeholder="Occasion">
                                </div>
                               

                                
                                <div class="input-field" id="performerInputField">
                                    <i class='fas fa-envelope'></i>
                                    <img src="images/schedule.png" alt="">
                                    <input type="performer" name="performer" id="performer" placeholder="Select a Category of performer" onclick="togglePerformerDropdown()">
                                    <div id="performer-dropdown">
                                     <a onclick="selectPerformerCategory('Singer')">Singer</a>
                                     <a onclick="selectPerformerCategory('Dancer')">Dancer</a>
                                     <a onclick="selectPerformerCategory('Actors')">Actors</a>
                                     <a onclick="selectPerformerCategory('Comedians')">Comedians</a>
                                      <a onclick="selectPerformerCategory('Magicians')">Magicians</a>
                                     <a onclick="selectPerformerCategory('Musicians')">Musicians</a>
                                    </div>
                                </div>
                                
                                

                                <button  type="submit" class="btn btn-primary" name="submit" value="book" required >Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    
     
<script>
    function toggleDropdown() {
        var inputField = document.getElementById('customInputField');
        inputField.classList.toggle('active');
    }

    function selectOption(option) {
        document.getElementById('option').value = option;
        toggleDropdown(); // Close the dropdown after selection if needed
    }
</script>
<script>
    function toggleDropdown() {
        var inputField = document.getElementById('customInputField');
        inputField.classList.toggle('active');
    }

    function selectOption(option) {
        var optionInput = document.getElementById('option');

        if (option === 'Specific') {
            // Show calendar for specific date and time
            flatpickr(optionInput, {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
                onClose: function (selectedDates, dateStr, instance) {
                    toggleDropdown(); // Close the dropdown after selection
                }
            });
        } else if (option === 'Range') {
            // Show calendar for date range
            flatpickr(optionInput, {
                mode: 'range',
                onClose: function (selectedDates, dateStr, instance) {
                    toggleDropdown(); // Close the dropdown after selection
                }
            });
        }

        optionInput.value = option;
        toggleDropdown(); // Close the dropdown after selection if needed
    }
</script>

<script>
    function toggleOccasionDropdown() {
        var occasionInputField = document.getElementById('occasionInputField');
        occasionInputField.classList.toggle('active');
    }

    function selectOccasion(occasion) {
        document.getElementById('occasion').value = occasion;
        toggleOccasionDropdown(); // Close the dropdown after selection if needed
    }
</script>


<script>
    function togglePerformerDropdown() {
        var performerInputField = document.getElementById('performerInputField');
        performerInputField.classList.toggle('active');
    }
    

    function selectPerformerCategory(category) {
        document.getElementById('performer').value = category;

        // If the category is Singer, show the second dropdown
        if (category === 'Singer') {
            showPerformerDropdown(['Mandeep Singh', 'Rupali Bhattacharjee', 'Naviin Gandharv']);
        } else {
            hidePerformerDropdown();
        }
        
        togglePerformerDropdown(); // Close the dropdown after selection if needed
    }

    function showPerformerDropdown(performers) {
        var performerDropdown = document.getElementById('performer-dropdown');
        performerDropdown.innerHTML = ''; // Clear previous options

        performers.forEach(function (performer) {
            var option = document.createElement('a');
            option.textContent = performer;
            option.onclick = function () {
                selectPerformer(performer);
            };

            performerDropdown.appendChild(option);
        });

        performerDropdown.style.display = 'block';
    }

    function hidePerformerDropdown() {
        var performerDropdown = document.getElementById('performer-dropdown');
        performerDropdown.style.display = 'none';
    }
    function selectPerformer(performer) {
    var performerInput = document.getElementById('performer');
    performerInput.value = performer;
    hidePerformerDropdown(); // Close the dropdown after selection if needed
    }

    
</script>


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