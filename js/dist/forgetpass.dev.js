"use strict";

document.addEventListener('DOMContentLoaded', function () {
  var forgetPassForm = document.querySelector('.sign-in-form');
  forgetPassForm.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevents the form from submitting normally

    var emailOrPhone = document.querySelector('input[type="email"]').value; // Basic validation (you can add more complex validation as needed)

    if (emailOrPhone === '') {
      alert('Please enter your email or phone number.');
      return;
    } // Here, you would typically send this data to your server for password reset
    // For this example, let's assume the password reset is successful


    alert('Password reset instructions sent!'); // Replace this with your actual password reset logic
  });
});
//# sourceMappingURL=forgetpass.dev.js.map
