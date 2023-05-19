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

  <title>Photostore</title>

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

<body class="sub_page">
 <?php $page = basename($_SERVER['PHP_SELF']);?>
  <div class="hero_area">

    <div class="main slick_main">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a href="index.php" class="navbar-brand ml-5">
            <img src="images/logo.png" alt="">
          </a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link <?php if($page == 'index.php'){ echo "active";}?> " href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php if($page == 'about.php'){ echo "active";}?> ">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
                <li class="nav-item <?php if($page == 'explore.php'){ echo "active";}?>  ">
                  <a class="nav-link" href="explore.php">Explore </a>
                </li>
                <li class="nav-item <?php if($page == 'cart.php'){ echo "active";}?> ">
                  <a class="nav-link" href="cart.php">Cart</a>
                </li>
    <?php
          session_start();
          if (isset($_SESSION['email'])) {
    ?>
        <li class="nav-item <?php if($page == 'profile.php'){ echo "active";}?> ">
          <a class="nav-link" href="profile.php">
          <i class="fas fa-user-circle"></i> PROFILE</a>
         </li>
        
        <form name="myform" class="form-inline" method="POST" action="searchbox.php">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" required/>
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit" name="submit" value="submit"></button>
        </form>
      


    <?php

      } 
      else {
      ?>
        <li class="nav-item  <?php if($page == 'login.php'){ echo "active";}?> ">
          <a class="nav-link" href="login.php">LOGIN</a>
         </li>

        <form name="myform" class="form-inline" method="POST" action="searchbox.php">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" required/>
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit" name="submit" value="submit"></button>
        </form>
      <?php
      }
    ?>
  </div>
              </ul>
              
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


</body>

</html>