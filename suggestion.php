<link rel="stylesheet" href="suggestion.css">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="addToCart.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- Navigation Bar -->
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

<!-- Skin Type Selection -->
<div class="skin-type-container">
  <label for="skin-type">Select Your Skin Type:</label>
  <select id="skin-type" name="skin-type">
    <option value="problem">Select your Problem</option>
    <option value="acne">Acne-Prone Skin</option>
    <option value="oily">Oily Skin</option>
    <option value="dry">Dry Skin</option>
    <option value="combination">Combination Skin</option>
    <option value="sensitive">Sensitive Skin</option>
    <option value="normal">Normal Skin</option>
  </select>
</div>

<!-- Product Recommendation Section -->
<div id="product-recommendation" class="product-recommendation">
  <!-- This section will show product suggestions based on selected skin type -->
</div>

<!-- Footer -->
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
          <li><a href="services.php">Shipping & Delivery</a></li>
          <li><a href="home.php">Returns & Exchanges</a></li>
          <li><a href="suggestion.php">FAQs</a></li>
          <li><a href="contact.php">Contact Us</a></li>
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

<!-- Add JavaScript to handle skin type selection and product display -->
<script>
  // Function to display the relevant product recommendation
  document.getElementById('skin-type').addEventListener('change', function () {
    var skinType = this.value;
    var productRecommendation = document.getElementById('product-recommendation');

    // Clear the current recommendation
    productRecommendation.innerHTML = '';

    // Display product recommendations based on skin type
    switch (skinType) {
      case 'acne':
        productRecommendation.innerHTML = '<h3>Recommended Product:</h3><br><br><h3>Rs.1000</h3><p>Oil-Control Cleanser - Helps reduce excess oil and keep your skin feeling fresh. <img src="images/acne defence face wash.webp" alt="Skin Care Serum" height="300px" width="300px"></p>';
        break;
      case 'oily':
        productRecommendation.innerHTML = '<h3>Recommended Product:</h3><p>Oil-Control Cleanser - Helps reduce excess oil and keep your skin feeling fresh.  <img src="images/oil control face wash.webp" alt="Skin Care Serum" height="300px" width="300px"></p>';
        break;
      case 'dry':
        productRecommendation.innerHTML = '<h3>Recommended Product:</h3><p>Hydrating Moisturizer - Keeps your skin soft and moisturized throughout the day. <img src="images/sun screen.webp" alt="Skin Care Serum" height="300px" width="300px"></p>';
        break;
      case 'combination':
        productRecommendation.innerHTML = '<h3>Recommended Product:</h3><p>Balancing Gel Cleanser - Perfect for combination skin, balancing oil and moisture levels.  <img src="images/daily essential.webp" alt="Skin Care Serum" height="300px" width="300px"></p>';
        break;
      case 'sensitive':
        productRecommendation.innerHTML = '<h3>Recommended Product:</h3><p>Soothing Cleanser - A gentle formula for sensitive skin that helps reduce irritation. <img src="images/skin serum.webp" alt="Skin Care Serum" height="300px" width="300px"></p>';
        break;
      case 'normal':
        productRecommendation.innerHTML = '<h3>Recommended Product:</h3><p>Gentle Daily Cleanser - Ideal for normal skin, it cleanses without stripping moisture. <img src="images/rice face wash.webp" alt="Skin Care Serum" height="300px" width="300px"></p>';
        break;
      default:
        productRecommendation.innerHTML = '<h3>Recommended Product:</h3><p>Select your skin type to see the product suggestions.</p>';
        break;
    }
  });
</script>