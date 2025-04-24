<link rel="stylesheet" href="contact.css">
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
<!-- Contact Us Page -->
<div class="page" id="contact">
  <center>
    <h1>Review Us</h1>
    <p>If you have any questions or feedback, please leave us a message.</p>
  </center>
  <!-- Contact Form -->
  <div class="contact-form">
    
<form action="add_review.php" method="POST">
    <label for="name">Full Name</label>
    <input type="text" name="name" placeholder="Your Name" required>
    <label for="city">City</label>
    <input type="text" name="city" placeholder="Your City" required>
    <label for="review">Review:</label>
    <textarea name="review" placeholder="Write your Feedback..." required></textarea>
    <label>Rating:</label>
    <select name="rating">
        <option value="5">★★★★★ (5 Stars)</option>
        <option value="4">★★★★☆ (4 Stars)</option>
        <option value="3">★★★☆☆ (3 Stars)</option>
        <option value="2">★★☆☆☆ (2 Stars)</option>
        <option value="1">★☆☆☆☆ (1 Star)</option>
    </select>
    <br>
    <button type="submit">Submit Review</button>
</form>

  </div>
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