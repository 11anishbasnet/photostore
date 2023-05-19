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

<body>
  <?php include"header.php";

if (isset($_SESSION['email'])) {
  include("database_connection.php");
  $emil= $_SESSION['email'];
  $sql = "SELECT * FROM user WHERE email = '$emil' ";
  $result = $conn->query($sql);

  while($row = $result->fetch_assoc()) {
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $birthday = $row["birthday"];
    $email = $row["email"];
    $gender = $row["gender"];
    $phone = $row["phone"];
  }

?>

<div class="row">
      <div class="col-sm-12">
        
  <section style="background-color: whitesmoke;">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Personal Details</h3>
            <form name="myform" method="POST" action="update.php" onsubmit="return validate()">

                  <?php

                    if(isset($_GET['Message'])){
                      echo "<font color='red'>".$_GET['Message']."</font>";
                    }
                  ?>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" value= '<?php echo $firstname ?>' name="firstName" required/>
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" value= '<?php echo $lastname ?>' name="lastName" required/>
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="date" class="form-control form-control-lg" id="birthday" value= '<?php echo $birthday ?>' name="birthday"/>
                    <label for="birthday" class="form-label">Birthday</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender" value= 'female' <?php if($gender=='female'){?> checked <?php } ?>/>
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value='male' <?php if($gender=='male'){?> checked <?php } ?>/>
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value='other' <?php if($gender=='other'){?> checked <?php } ?> />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="email" class="form-control form-control-lg" 
                    value='<?php echo $email ?>' name="email" required/>
                    <label class="form-label" for="email" >Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phone" class="form-control form-control-lg" value='<?php echo $phone ?>' name="phone" required/>
                    <label class="form-label" for="phone">Phone Number</label>
                  </div>

                </div>
              </div>


              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Update"/>
                <button type="submit" class="btn btn-primary btn-lg" formaction="/Photostore/logout.php">Logout</button>
            </div>
            </form>

</div>
</div>
</div>
</div>
</div>



<?php

    $conn->close();
} 

else {
  header("Location: login.php");
}

   ?>


  <?php include"footer.php"; ?>
</body>

</html>