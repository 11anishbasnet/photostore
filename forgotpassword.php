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

 <div class="form-gap"></div>
<div class="container d-flex justify-content-center">
  <div class="row">
    <div class="col-md-12 col-md-offset-4 ">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center mt-5">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
  </div>
</div>

  <div class="row">
    <div class="col-sm-12 fixed-bottom"><?php include "footer.php"?></div>
  </div>
</body>
</html>