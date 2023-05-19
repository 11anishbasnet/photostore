<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>footer</title>



  <!-- slider stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:500|Raleway:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>

  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info-logo">
            <a href="">
              <img src="images/logo.png" alt="">
            </a>
            <p>
              PhotoStore is a professional photo gallery & shopping cart. Customers can instantly download photo after payment. Allow you to sell and buy photos instantly with same account. Sell various sizes or formats of the same photo.
            </p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 offset-lg-1">
          <div class="info-nav">
            <h4>
              Navigation
            </h4>
            <ul>
              <li>
                <a href="index.php">
                  Home
                </a>
              </li>
              <li class="active">
                <a href="about.php">
                  About
                </a>
              </li>
              <li>
                <a href="explore.php">
                  Explore
                </a>
              </li>
              <li>
                <a href="cart.php">
                  Cart
                </a>
              </li>
              <?php
          if (isset($_SESSION['email'])) {
    ?>
        <li>
          <a href="profile.php">
          <i class="fas fa-user-circle"></i> Profile</a>
         </li>

    <?php

      } 
      else {
      ?>
        <li>
          <a href="login.php">Login</a>
         </li>
      <?php
      }
    ?>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-contact">
            <h4>
              Contact Info
            </h4>
            <div class="location">
              <h6>
                Mantain Office Address:
              </h6>
              <a href="">
                <img src="images/location.png" alt="">
                <span>
                  Kirtipur,Kathmandu
                </span>
              </a>
            </div>
            <div class="call">
              <h6>
                Customer Service:
              </h6>
              <a href="tel:+01 1234567890">
                <img src="images/call.png" alt="">
                <span>
                  ( +01 1234567890 )
                </span>
              </a>
            </div>
            <div class="call">
              <a href="mailto:11photostore@gmail.com">
                <img src="images/mail.png" alt="">
                <span>
                  11photostore@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 offset-lg-1">
          <div class="discover">
            <h4>
              Discover
            </h4>
            <ul>
              <li>
                <a href="">
                  Help
                </a>
              </li>
              <li>
                <a href="">
                  How It Works

                </a>
              </li>
              <li>
                <a href="">
                  subscribe
                </a>
              </li>
              <li>
                <a href="contact.php">
                  Contact Us
                </a>
              </li>
            </ul>
            <div class="social-box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/insta.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- end info_section -->



  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2022 All Rights Reserved By
      <a href="index.php">PHOTOSTORE</a><br>
    </p>
  </section>
  <!-- footer section -->

</body>

</html>