<!DOCTYPE html>
<html>
<head>
	<title>photostore</title>
	 	<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  		<link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/all.css">
  		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="row">
    <div class="col-sm-12">
      <?php include "header.php"?>
    </div>
  </div>

  <div class="row>">
  <div class="col-sm-12">
  <section style="background-color: whitesmoke;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="images/book.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form name="myform" method="POST" action="logincheck.php" id="myform" onsubmit="return validate()">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control form-control-lg" name="email" required/>
                    <label class="form-label" for="email">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control form-control-lg" name="password" required/>
                    <label class="form-label" for="password">Password</label>
                  </div>
                  <?php

                    if(isset($_GET['link']))
                     {
                        echo "**Invalid email or Password**";
                      }
                  ?>
                  <div class="pt-1 mb-4">
                    
                    <input class="btn btn-dark btn-lg btn-block" type="submit" name="submit" value="Login"/>
                  </div>

                  <a class="small text-muted" href="forgotpassword.php">Forgot password?</a>
                  <p class="mb-0 pb-lg-0" style="color: #393f81;">Don't have an account? <a href="register.php"
                      style="color: #393f81;">Register here</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</div>

<script type="text/javascript" src="js/loginvalidation.js"></script>
  <div class="row">
    <div class="col-sm-12"><?php include "footer.php"?></div>
  </div>
</body>
</html>