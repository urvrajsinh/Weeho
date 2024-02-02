"use strict";

document.addEventListener('DOMContentLoaded', function () {
  var loginForm = document.querySelector('.sign-in-form');
  loginForm.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevents the form from submitting normally

    var emailOrPhone = document.querySelector('input[type="email"]').value;
    var password = document.querySelector('input[type="password"]').value; // Basic validation (you can add more complex validation as needed)

    if (emailOrPhone === '' || password === '') {
      alert('Please fill in all fields.');
      return;
    } // Send data to PHP script using Fetch API


    fetch('login.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        emailOrPhone: emailOrPhone,
        password: password
      })
    }).then(function (response) {
      return response.json();
    }).then(function (data) {
      if (data.success) {
        window.location.href = 'bookanevent.html';
      } else {
        alert('Login failed. Incorrect email and password.');
      }
    })["catch"](function (error) {
      console.error('Error:', error);
      alert('An error occurred. Please try again.');
    });
  });
});
//# sourceMappingURL=login.dev.js.map
