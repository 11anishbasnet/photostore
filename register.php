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
    <div class="col-sm-12"><?php include "header.php"?></div>
  </div>

    <div class="row">
      <div class="col-sm-12">
      	
  <section style="background-color: whitesmoke;">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form name="myform" method="POST" action="register_save.php" onsubmit="return validate()">

                  <?php

                    if(isset($_GET['Message'])){
                      echo "<font color='red'>".$_GET['Message']."</font>";
                    }
                  ?>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" name="firstName" required/>
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" name="lastName" required/>
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="date" class="form-control form-control-lg" id="birthday" name="birthday"/>
                    <label for="birthday" class="form-label">Birthday</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="female" checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value="other" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="email" class="form-control form-control-lg" name="email" required/>
                    <label class="form-label" for="email" >Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phone" class="form-control form-control-lg" name="phone" required/>
                    <label class="form-label" for="phone">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="password" id="password" class="form-control form-control-lg" name="password" required/>
                    <label class="form-label" for="password">Password</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="password" id="confirmpassword" class="form-control form-control-lg" name="confirmpassword" required/>
                    <label class="form-label" for="confirmpassword">Confirm Password</label>
                  </div>

                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" name="submit" value="submit"/>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
      	
      </div>
    </div>

<script type="text/javascript" src="js/validation.js"></script>
  <div class="row">
    <div class="col-sm-12"><?php include "footer.php"?></div>
  </div>
</body>
</html>