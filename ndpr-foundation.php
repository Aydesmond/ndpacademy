
<?php
require 'validate.php';
?>
<?php 
  // session_start(); 

  // if (!isset($_SESSION['username'])) {
  // 	$_SESSION['msg'] = "You must log in first";
  // 	header('location: login.php');
  // }
  // if (isset($_GET['logout'])) {
  // 	session_destroy();
  // 	unset($_SESSION['username']);
  // 	header("location: login.php");
  // }
?>
<!-- header starts here -->
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <title>NDPR Foundation Course</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="../plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="../plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="../plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="../plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="../plugins/venobox/venobox.css">
  <!-- icon lib -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Main Stylesheet -->
  <link href="../css/dashboard.css" rel="stylesheet">
  
  <!--Favicon-->
 <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

</head>

<!-- header stops here -->

<body>
  

<!-- header -->
<header class="fixed-top header">

  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="../dashboard.php"><img src="../images/logo.png" alt="logo"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item">
              <a class="nav-link" href="../dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="modules.php">Course Modules</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Resources</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="receipts.php">Receipts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="certificates.php">Certificate</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->


<!-- page title -->
<section class="page-title-section overlay" data-background="../images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="courses.php">Our Courses</a></li> <p></p>
          <li class="list-inline-item text-white h3 font-secondary nasted">Certified NDPR foundation course</li>
        </ul>
        <p class="text-lighten">Our training programme is built on the foundations of our extensive practical experience designing and implementing management systems based on NDPR standards, and best practice.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- section -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-4">
        <!-- course thumb -->
        <!-- <img src="images/courses/course-single.jpg" class="img-fluid w-100"> -->
      </div>
    </div>
    <!-- course info -->
    <div class="row align-items-center mb-5">
      <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
        <h2>...</h2>
      </div>
      <div class="col-xl-6 order-sm-3 order-xl-2 col-12 order-2">
        <ul class="list-inline text-xl-center">
          <li class="list-inline-item mr-4 mb-3 mb-sm-0">
            <div class="d-flex align-items-center">
              <i class="ti-book text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">COURSES</h6>
                <p class="mb-0">1 Day</p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-4 mb-3 mb-sm-0">
            <div class="d-flex align-items-center">
              <i class="ti-alarm-clock text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">DURATION</h6>
                <p class="mb-0">07 Hours</p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-4 mb-3 mb-sm-0">
            <div class="d-flex align-items-center">
              <i class="ti-wallet text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">FEE</h6>
                <p class="mb-0">#250,000</p>
              </div>
            </div>
          </li>
          
        </ul>
      </div>
      <div class="col-xl-3 text-sm-right text-left order-sm-2 order-3 order-xl-3 col-sm-6 mb-4 mb-xl-0">
      <form>
      <a href="process-payment.php" class="btn btn-primary">Pay Now</a>
      </form>
       
      </div>
      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    
    
<!-- manual Payment -->
<div class="row">
<div class="col-12 mb-4">
<p>
<h3>Make Manual Payment</h3>
<p>Manual Payment can be made into the following account <br>
Account Number:        <strong> 1021455361</strong> <br>

Account Name:           <strong>21Search Limited</strong> <br>

Bank Name:                 <strong> UBA </strong> <br>

Kindly send payment receipt after payment has been made to <strong> <a href="mailto:opeyemi.adeleke@ndpracademi.ng">opeyemi.adeleke@ndpracademy.ng</a></strong><br>
On confirmation, your dashboard will be updated with the Course material, also a confirmation email will be sent to you.


</p>
<p></p>
</p>
</div>
</div>

    <!-- course details -->
    <div class="row">
      <div class="col-12 mb-4">
        <h3>About Course</h3>
        <p> NAC1B holds at the  <strong> Lagos Oriental Hotel, Victoria Island </strong> on <strong> Thursday, December 5, 2019 </strong> from <strong> 8:30am.</strong>
</p>
      </div>
      <div class="col-12 mb-4">
        <h3 class="mb-3">Requirements</h3>
        <div class="col-12 px-0">
          <div class="row">
            <div class="col-md-6">
              <ul class="list-styled">
              <li>Participants must accordingly come for the class with their laptops.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="col-12 mb-4">
        <h3 class="mb-3">How to Apply</h3>
        <ul class="list-styled">
          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati unde nulla? Lorem, ipsum
            dolor. Lorem, ipsum.</li>
          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati unde nulla? Lorem, ipsum
            dolor. Lorem, ipsum.</li>
          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati unde nulla? Lorem, ipsum
            dolor. Lorem, ipsum.</li>
          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati unde nulla? Lorem, ipsum
            dolor. Lorem, ipsum.</li>
          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati unde nulla? Lorem, ipsum
            dolor. Lorem, ipsum.</li>
        </ul>
      </div> -->
      <!-- teacher -->
      <div class="col-12">
        <h5 class="mb-3">Course Module</h5>
        <div class="d-flex justify-content-between align-items-center flex-wrap">
          <div class="media mb-2 mb-sm-0">
            <img class="mr-4 img-fluid" src="../images/teacher.jpg" alt="Teacher">
            <div class="media-body">
            <h4 class="mt-0"> <a href="https://ndpracademy.ng/resources/2019 Q4 NDPR Academy Programme.pdf"> Download Course module</a> </h4>
              Certified NDPR foundation course module
            </div>
          </div>
        </div>
        <div class="border-bottom border-primary mt-4"></div>
      </div>
    </div>
  </div>
</section>
<!-- /section -->


<!-- footer Include here -->

<footer>
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="../dashboard.php"><img class="img-fluid mb-4" src="../images/logo1.png" alt="logo"></a>
          <ul class="list-unstyled">
            <li class="mb-2 text-lighten">68 Molade Okoya Thomas, Off Ajose Adeogun, Victoria Island</li>
            <li class="mb-2 text-lighten">+234 708  194 8647</li>
            <!-- <li class="mb-2">+234 708  194 8647</li> -->
            <li class="mb-2 text-lighten">info@ndpracademy.ng</li>
          </ul>
        </div>
        <!-- company -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">RESOURCES</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">Newsletters</a></li>
            <li class="mb-3"><a class="text-color" href="#">Webinars</a></li>
            <li class="mb-3"><a class="text-color" href="#">Case Studies</a></li>
            <li class="mb-3"><a class="text-color" href="#">Current offers</a></li>
          </ul>
        </div>
        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">INFORMATION</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">About Us</a></li>
            <li class="mb-3"><a class="text-color" href="#">Partners</a></li>
            <li class="mb-3"><a class="text-color" href="#">Gallery</a></li>
            <li class="mb-3"><a class="text-color" href="#">Privacy Policy</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">SUPPORT</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">Forums</a></li>
            <li class="mb-3"><a class="text-color" href="#">Documentation</a></li>
            <li class="mb-3"><a class="text-color" href="#">Language</a></li>
            <li class="mb-3"><a class="text-color" href="#">Release Status</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">RECOMMEND</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">Contact Us</a></li>
            <li class="mb-3"><a class="text-color" href="#">Return Policy Policy</a></li>
            <li class="mb-3"><a class="text-color" href="#">Leave a review</a></li>
            <li class="mb-3"><a class="text-color" href="#">Cookie Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0 text-lighten">Copyright
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            © Designed by <a href="http://taxtech.com.ng">Taxtech</a></p>  All Rights Reserved.
        </div>

      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="../plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="../plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="../plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="../plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="../plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="../plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="../plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="../js/script.js"></script>

</body>
</html>