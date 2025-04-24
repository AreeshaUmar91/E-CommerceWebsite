document.getElementById('loginForm').addEventListener('submit', function(e) {
  e.preventDefault();

  var phone = document.getElementById('phone').value;
  var email = document.getElementById('email').value;

  // Send phone number and email to server via AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "send_verification_code.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
          // If the code was sent, show the verification input section
          document.getElementById('verificationSection').style.display = 'block';
      }
  };
  xhr.send("phone=" + phone + "&email=" + email);
});

// Function to verify the code entered by the user
function verifyCode() {
  var codeEntered = document.getElementById('verificationCode').value;

  // Send the entered code to the server for verification
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "verify_code.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
          var response = xhr.responseText;
          if (response === "verified") {
              alert("Phone number verified successfully!");
          } else {
              alert("Invalid verification code. Please try again.");
          }
      }
  };
  xhr.send("code=" + codeEntered);
}
