<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Skincare Company</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 80%;
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    h2 {
      text-align: center;
      color: #2C3E50;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      font-size: 14px;
      color: #555;
    }

    .form-group input {
      width: 90%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 14px;
    }

    .form-group input[type="submit"] {
      background-color: #27ae60;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
    }

    .form-group input[type="submit"]:hover {
      background-color: #2ecc71;
    }

    .thank-you-message {
      display: none;
      text-align: center;
      font-size: 18px;
      color: #27ae60;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Login - Skincare Company</h2>
    <form id="loginForm">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Login">
      </div>
    </form>
    <div class="thank-you-message" id="thankYouMessage">
      <p>Thank you for joining us!</p>
    </div>
  </div>

  <script>
    // Handle form submission
    const form = document.getElementById('loginForm');
    const thankYouMessage = document.getElementById('thankYouMessage');

    form.addEventListener('submit', function (event) {
      event.preventDefault();

      // Get the user input
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;

      // Hide the login form
      form.style.display = 'none';

      // Show the thank you message
      thankYouMessage.style.display = 'block';
    });
  </script>
</body>

</html>