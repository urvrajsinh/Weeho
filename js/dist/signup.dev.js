"use strict";

document.addEventListener('DOMContentLoaded', function () {
  var signupForm = document.querySelector('.sign-up-form');
  signupForm.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevents the form from submitting normally

    var name = document.querySelector('input[type="text"]').value;
    var phoneNumber = document.querySelector('input[type="tel"]').value;
    var email = document.querySelector('input[type="email"]').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value; // Basic validation (you can add more complex validation as needed)

    if (name === '' || phoneNumber === '' || email === '' || password === '' || confirmPassword === '') {
      alert('Please fill in all fields.');
      return;
    }

    if (password !== confirmPassword) {
      alert('Passwords do not match. Please try again.');
      return;
    } // Send data to PHP backend using AJAX


    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'signup.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function () {
      if (xhr.readyState == XMLHttpRequest.DONE) {
        if (xhr.status == 200) {
          if (xhr.responseText === 'user all ready exist') {
            alert('User already exists. Please use a different email.');
          } else {
            window.location.href = 'bookanevent.html'; // Redirect on successful signup
          }
        } else {
          // Request failed
          alert('Error: ' + xhr.status);
        }
      }
    }; // Prepare data to be sent


    var data = 'name=' + encodeURIComponent(name) + '&tel=' + encodeURIComponent(phoneNumber) + '&email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password); // Send the request

    xhr.send(data);
  });
});
//# sourceMappingURL=signup.dev.js.map
