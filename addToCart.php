<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add to Cart</title>
  <link rel="stylesheet" href="services.css">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="addToCart.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="services.js"></script>

</head>

<body>
  <!-- Navigation Bar (same as before) -->
  <header>
    <li><a href="home.php"><img src="images/WhatsApp Image 2025-03-03 at 06.29.41.jpeg" alt="" height="50px"
          width="70px"></a></li>
    <nav>

      <ul>

        <li><a href="home.php">Home</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="suggestion.php">Suggestion</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="contact.php">Review Us</a></li>
 <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
    <li><a href="addToCart.php"><i class="fas fa-cart-plus"></i></a></li>
  </header>

  <!-- Cart Display -->
  <div class="container">
    <center>
      <h1>Your Cart</h1>
    </center>

    <!-- Cart Items List -->
    <div id="cart-items-container">
      <h2>Products in Your Cart</h2>
      <div id="items-list"></div>
    </div>

    <!-- User Details -->

    <div id="user-details-container">
      <h2>Your Details</h2>
    </div>

    <!-- Total Price Display -->
    <div id="total-price-container">
      <h3>Total Price: <span id="total-price">Rs.0</span></h3>
    </div>
  </div>

  <footer>
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-section about-us">
          <h4>About Us</h4>
          <p>We’re passionate about delivering<br> premium skincare solutions that help you feel your <br>Our products
            are crafted with care and<br> are designed for all skin types.</p>
        </div>

        <div class="footer-section customer-care">
          <h4>Customer Care</h4>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="suggestion.php">Suggestion</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contact.php">Review Us</a></li>
          </ul>
        </div>

        <div class="footer-section quick-links">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="services.php">Shop Now</a></li>
            <li><a href="services.php">Bestsellers</a></li>
            <li><a href="services.php">New Arrivals</a></li>
            <li><a href="services.php">Blog</a></li>
            <li><a href="services.php">Ingredients Guide</a></li>
          </ul>
        </div>

        <div class="footer-section follow-us">
          <h4>Follow Us</h4>
          <!-- <p>Stay updated with the latest skincare <br>tips and product launches by following<br> us on social media!
          </p> -->
          <div class="social-icons">
            <!-- Facebook Icon -->
            <a href="https://www.facebook.com/yourprofile" target="_blank" class="social-icon">
              <i class="fab fa-facebook-square" style="font-size: 40px;" class="social-icon"></i>
            </a>

            <!-- Instagram Icon -->
            <a href="https://www.instagram.com/yourprofile" target="_blank">
              <i class="fab fa-instagram" style="font-size: 40px;"></i>
            </a>
            <!-- Twitter Icon -->
            <a href="https://www.twitter.com/yourprofile" target="_blank" class="social-icon">
              <i class="fab fa-twitter-square" style="font-size: 40px;" class="social-icon"></i>
            </a>

            <!-- Tiktok Icon -->
            <a href="https://www.tiktok.com/yourprofile" target="_blank">
              <i class="fab fa-tiktok" style="font-size: 40px;"></i>
            </a>
          </div>
        </div>

        <div class="footer-section newsletter">
          <h4>Sign Up for Our Newsletter</h4>
          <!-- <p>Join our community for exclusive offers, skincare advice, and more.</p> -->
          <input type="email" placeholder="Enter your email" class="newsletter-input">
          <button class="subscribe-button">Subscribe</button>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="contact-info">
          <p>1234 Skin Care Blvd, Suite 567 | City, State, Zip Code</p>
          <p>Phone: (555) 123-4567 | Email: support@skincarewebsite.com</p>
        </div>
        <div class="footer-links">
          <a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a> | <a href="#">Sitemap</a>
        </div>
      </div>
    </footer>

  </footer>

  <script>
    // Retrieve cart items, total price, and user details from localStorage
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const totalPrice = parseFloat(localStorage.getItem('totalPrice')) || 0;
    const userDetails = JSON.parse(localStorage.getItem('userDetails')) || {};

    // Display cart items
    const itemsListContainer = document.getElementById('items-list');
    cartItems.forEach(item => {
      const itemDiv = document.createElement('div');
      itemDiv.classList.add('cart-item');
      itemDiv.innerHTML = `<p><strong>${item.description}</strong> - Rs.${item.price}</p>`;
      itemsListContainer.appendChild(itemDiv);
    });

    // Display total price
    document.getElementById('total-price').textContent = `Rs.${totalPrice.toFixed(2)}`;

    // Display user details
    const userDetailsContainer = document.getElementById('user-details-container');
    if (userDetails.firstName) {
      userDetailsContainer.innerHTML = ` <h2>Your Details</h2>
        <p><strong>Name:</strong> ${userDetails.firstName} ${userDetails.lastName}</p>
        <p><strong>Address:</strong> ${userDetails.address}</p>
        <p><strong>Phone:</strong> ${userDetails.phone}</p><h4>Thanks for shopping here ...<br>Visit Us Again!</h4>
      `;
    } else {
      userDetailsContainer.innerHTML = "<p>No user details available. Please fill in your information.</p>";
    }

  </script>
</body>

</html>