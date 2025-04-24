<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>
  <link rel="stylesheet" href="services.css">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="addToCart.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="services.js"></script>
</head>

<body>
  <!-- Navigation Bar (same as before) -->
  <header>
    <li><a href="home.php"><img src="images/WhatsApp Image 2025-03-03 at 06.29.41.jpeg" alt="" height=" 50px"
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

  <center>
    <h1 class="headingone">Services Provided By Us!</h1>
  </center>

  <div class="container">
    <div class="products-container">
      <!-- Product 1 -->
      <div class="product">
        <div class="prod_img">
          <img src="images/acne defence face wash.webp" alt="Skin Care Serum" height="300px" width="300px">
        </div>
        <div class="description">Acne Defence Face wash</div>
        <div class="price">1000 Rs.</div>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Product 2 -->
      <div class="product">
        <div class="prod_img">
          <img src="images/1CreamFront_1066x.webp" alt="Skin Care Serum" height="300px" width="300px">
        </div>
        <div class="description">Skin Care Cream</div>
        <div class="price">1500 Rs.</div>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <!-- Product 3 -->
      <div class="product">
        <div class="prod_img">
          <img src="images/better then ubtan.webp" alt="Skin Care Serum" height="300px" width="300px">
        </div>
        <div class="description">Better Then Ubtan</div>
        <div class="price">1600 Rs.</div>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <!-- Product 4 -->
      <div class="product">
        <div class="prod_img">
          <img src="images/hydra power face wash.webp" alt="Skin Care Serum" height="300px" width="300px">
        </div>
        <div class="description">Hydra Power Face wash</div>
        <div class="price">900 Rs. </div>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <!-- Product 5 -->
      <div class="product">
        <div class="prod_img">
          <img src="images/oil control face wash.webp" alt="Skin Care Serum" height="300px" width="300px">
        </div>
        <div class="description">Oil Control Face Wash</div>
        <div class="price">2700 Rs.</div>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <!-- Product 6 -->
      <div class="product">
        <div class="prod_img">
          <img src="images/rice face wash.webp" alt="Skin Care Serum" height="300px" width="300px">
        </div>
        <div class="description">Rice Face Wash</div>
        <div class="price">1900</div>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <!-- Product 7 -->
      <div class="product">
        <div class="prod_img">
          <img src="images/skin serum.webp" alt="Skin Care Serum" height="300px" width="300px">
        </div>
        <div class="description">Skin Serum</div>
        <div class="price">2000 Rs.</div>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <!-- Product 8 -->
      <div class="product">
        <div class="prod_img">
          <img src="images/sun screen.webp" alt="Skin Care Serum" height="300px" width="300px">
        </div>
        <div class="description">Sun Screen Tube</div>
        <div class="price">1000 Rs. <span>On sale</span></div>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <!-- Product 9 -->
      <div class="product">
        <div class="prod_img">
          <img src="images/triple correction eye serum.webp" alt="Skin Care Serum" height="300px" width="300px">
        </div>
        <div class="description">Triple Correction Eye Serum</div>
        <div class="price">1700 Rs.</div>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <!-- Product 10 -->
      <div class="product">
        <div class="prod_img">
          <img src="images/daily essential.webp" alt="Skin Care Serum" height="300px" width="300px">
        </div>
        <div class="description">Daily Essential Face Wash</div>
        <div class="price">1200 Rs.</div>
        <button class="add-to-cart">Add to Cart</button>
      </div>
    </div>

    <!-- Total Price Display -->
    <div id="total-price-container">
      <h3>Total Price: <span id="total-price">Rs.</span></h3>
    </div>


    <!-- User Details Form -->
    <div id="user-details-container">
      <h2>Enter Your Details</h2>
      <form id="user-form">
        <label for="first-name">First Name:</label>
        <input type="text" id="first-name" name="first-name" required>

        <label for="last-name">Last Name:</label>
        <input type="text" id="last-name" name="last-name" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <button type="submit">Submit</button>
      </form>
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

    <script>
      // Store total price and cart items in localStorage
      let totalPrice = 0;
      let cartItems = [];

      // Function to update the total price
      function updateTotalPrice() {
        document.getElementById('total-price').textContent = `Rs.${totalPrice.toFixed(2)}`;
      }

      // Event listeners for "Add to Cart" buttons
      const addButtons = document.querySelectorAll('.add-to-cart');

      addButtons.forEach(button => {
        button.addEventListener('click', function () {
          // Get the product's details
          const productElement = this.closest('.product');
          const description = productElement.querySelector('.description').textContent.trim();
          const priceText = productElement.querySelector('.price').textContent.trim();
          const price = parseFloat(priceText.split(' ')[0].replace(/[^0-9.-]+/g, ''));

          // Add the product to the cartItems array
          cartItems.push({ description, price });

          // Update the total price
          totalPrice += price;

          // Store the updated cart and total price in localStorage
          localStorage.setItem('cartItems', JSON.stringify(cartItems));
          localStorage.setItem('totalPrice', totalPrice.toFixed(2));

          // Update the total price on the page
          updateTotalPrice();
        });
      });

      // Handle form submission (save user data in localStorage)
      document.getElementById('user-form').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the form from submitting and reloading the page

        // Save user details in localStorage
        const firstName = document.getElementById('first-name').value;
        const lastName = document.getElementById('last-name').value;
        const address = document.getElementById('address').value;
        const phone = document.getElementById('phone').value;

        const userDetails = { firstName, lastName, address, phone };
        localStorage.setItem('userDetails', JSON.stringify(userDetails));
      }

      );
      firstName.value = '';
    </script>
</body>

</html>