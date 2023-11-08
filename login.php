<?php include('dashboard/server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <title>Login - NDP Academy</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->

  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">
  <!-- icon lib -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
  
<!-- header -->
<?php include 'header.php' ?>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title5.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link"></a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
         </div>
    </div>
  </div>
</section>
<!-- /page title -->
                
<!-- Login form starts here --> 
<section id="signup-form">
  <form method="post" action="login.php">
  <?php include('errors.php'); ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
          <div class="row">
            <div class="col text-center">
              <h1>Login</h1>
              <!-- <p class="text-h3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p> -->
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="text" name="email" class="form-control" placeholder="Email Address" required>
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="password" name="password" class="form-control" placeholder="Password" required>              
            </div>
          </div>
                 <br><button type="submit" class="btn btn-primary mt-4" name="login_user">Login</button> <br> <p></p>
              <p><span class="psw">Forgot <a href="dashboard/reset-password/forgot.html">password?</a></span></p> <hr>
              <p> <a href="signup.php" id="logp"><b> Need an account? Click here to <span id="signin"> Register </span></b></a> </p>

              
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </section>

<!-- Register form ends here -->

<p></p>

<br>
<p></p>


<?php include 'footer.php' ?>

</body>
</html>