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



  <!--slick slider stylesheet -->
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
  <link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/all.css">
</head>

<body>
  <div class="hero_area">

    <div class="main slick_main">
      <div class="slider slider-for main_img-container">
        <div class="main-img-box b1">

        </div>
        <div class="main-img-box b2">

        </div>
        <div class="main-img-box b3">

        </div>
      </div>
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a href="index.html" class="navbar-brand">
            
          </a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="explore.php">Explore </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cart.php">Cart</a>
                </li>
    <?php
          session_start();
          if (isset($_SESSION['email'])) {
    ?>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">
          <i class="fas fa-user-circle"></i> PROFILE</a>
         </li>
    <?php

      } 
      else {
      ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">LOGIN</a>
         </li>
      <?php
      }
    ?>
              </ul>
              <form name="myform" class="form-inline" method="POST" action="searchbox.php">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" required/>
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit" name="submit" value="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <div class="brand_box">
              <a href="">
              </a>
            </div>
          </div>
          <div class="col-md-8 px-0">
            <div class="slider_content ">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-indicators-box">
                  01/
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                      01
                    </li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1">
                      02
                    </li>
                    <li data-target="#carouselExampleIndicators">
                      03
                    </li>
                  </ol>
                </div>

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="detail_box">
                      <h1>
                        CREATIVE <br />
                        PHOTOGRAPHY
                      </h1>
                      <p>
                        Capture wonderful moments and sell them.
                      </p>
                      <div class="btn-box">
                        <a href="contact.php" class="btn-1">Contact</a>
                        <a href="about.php" class="btn-2">About Us</a>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item ">
                    <div class="detail_box">
                      <h1>
                        BUY/SELL<br />
                        PHOTOS
                      </h1>
                      <p>
                        Buy or sell your own photos with just simple registration.
                      </p>
                      <div class="btn-box">
                        <a href="contact.php" class="btn-1">Contact</a>
                        <a href="about.php" class="btn-2">About Us</a>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item ">
                    <div class="detail_box">
                      <h1>
                        PHOTOSTORE <br />
                        GALLERY
                      </h1>
                      <p>
                        Explore our gallery of high quality photos .
                      <div class="btn-box">
                        <a href="" class="btn-1">Contact</a>
                        <a href="" class="btn-2">About Us</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-btn-box">
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>

              <div class="img_container">
                <div class="slider slider-nav slick_slider-nav">
                  <div class="img-box">
                    <img src="images/img-1.jpg" alt="">
                  </div>
                  <div class="img-box">
                    <img src="images/img-2.jpg" alt="">
                  </div>
                  <div class="img-box">
                    <img src="images/img-3.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <?php include"abouts1.php"; ?>

  <!-- portfolio section -->

  <section class="portfolio_section layout_padding-top">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Profile
        </h2>
        <p>
          Explore our gallery of amazing photos
        </p>
      </div>
    </div>
    <div class="portfolio_container slick-carousel">
      <div class="box">
        <img src="images/p-1.jpg" alt="">
        <div class="link-box">
          <a href="explore.php">
            <img src="images/link.png" alt="">
          </a>
          <h6>
            There are many more
          </h6>
        </div>
      </div>
      <div class="box">
        <img src="images/p-2.jpg" alt="explore.php">
        <div class="link-box">
          <a href="explore.php">
            <img src="images/link.png" alt="">
          </a>
          <h6>
            There are many more
          </h6>
        </div>
      </div>
      <div class="box">
        <img src="images/p-4.jpg" alt="explore.php">
        <div class="link-box">
          <a href="explore.php">
            <img src="images/link.png" alt="">
          </a>
          <h6>
            There are many more
          </h6>
        </div>
      </div>
      <div class="box">
        <img src="images/p-4.jpg" alt="">
        <div class="link-box">
          <a href="explore.php">
            <img src="images/link.png" alt="">
          </a>
          <h6>
            There are  more
          </h6>
        </div>
      </div>
    </div>
  </section>

  <!-- end portfolio section -->


  <!-- client section -->

  <section class="client_section layout_padding">

    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
        <p>
          What customers have to say about us...
        </p>
      </div>
      <div class="client_container">
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="box">
                <div class="img-box">
                  <img src="images/client.png" alt="">
                </div>
                <div class="detail-box">
                  <h4>
                    Awesome
                  </h4>
                  <p>
                    Awesome website! I have been using for so long. It is very useful for downloading photos for personal or professional use. My only issue is that some of the parts of the website is not responsive to mobile although it works perfectly fine for the pcs and laptops which is annoying because that is how i download mostly.It is easy to use fun to use and intuitive and allows you to achieve artistic photographic effects in a way that may surprise you that you're able to.
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="img-box">
                  <img src="images/client.png" alt="">
                </div>
                <div class="detail-box">
                  <h4>
                    Quality
                  </h4>
                  <p>
                    The website is totally amazing full of images. I have a fun and a amazing session with this website. It provide it with many features. The only issue is some pro filters you can't use like raw filter. And the the least is maximum photo quality. The default quality is 85% we can't increase it in free version. I think that it would be better if ADOBE SYSTEM provide maximum image quality in free version. I hope my message will be conveyed. But the website was wonderful!!!!
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="img-box">
                  <img src="images/client.png" alt="">
                </div>
                <div class="detail-box">
                  <h4>
                    Easy use
                  </h4>
                  <p>
                    I find photostore very easy to use and it can also be a great tool for selling and buying images. Also it is precise and very hard to detect once you have perfected its use, and the use delicate sensitivity within the 'control values' that are all at your fingertips.I've never had any problems with it- I'm quite happy and pleased with Photostore. All in all an exellent website addition to have at one's disposal, very nice enhancement features also💯🆒️💙🆓️.
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->


  <!-- news section -->

  <section class="news_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Latest Photos
        </h2>
        <p>
          Some of our latest photos...
        </p>
      </div>
  
<div class="row mb-4">

<?php
          if (isset($_SESSION['email'])) {
            $S_email=$_SESSION['email'];
    ?>
<?php

      } 
      else {}
    ?>
</div>
    <div class="row">

    <?php
      include "database_connection.php";
        $sql = " select * from images LIMIT 6";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row

          while($row = $result->fetch_assoc()) {
            $id=$row["id"];
            $email=$row["email"];
            $image=$row["image"];
            $imagetype=$row['imagetype'];
            $price=$row['price'];
            $aboutimage=$row['aboutimage'];
            ?>

    <div class="col-md-4 mb-4">
      <div class="thumbnail">
        <a href="images/<?php echo $image?>" target="_blank">
          <img src="images/<?php echo $image?>" alt="<?php echo $aboutimage?>" title="<?php echo $aboutimage?>" style="width:100%;height: 350px;"></a>
      </div>
    </div>

<?php
                }
        }
    ?>

  </div>

    </div>
  </section>

  <!-- end news section -->



  <!-- footer section -->
  <?php include"footer.php" ?>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- end google map js -->


  <script>
    $('.slider-for').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: true,
      centerMode: true,
      focusOnSelect: true,

    });
  </script>

  <script>
    $('.slick-carousel').slick({
      infinite: true,
      slidesToShow: 3, // Shows a three slides at a time
      slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 420,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 3,
        }
      }

      ]
    });
  </script>

</body>

</html>