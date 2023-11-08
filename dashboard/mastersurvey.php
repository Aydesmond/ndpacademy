<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Master Course Survey - NDPR Academy</title>

  <!-- include header -->
    <?php
    include 'header.php';
    ?>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php 
    include 'navbar.php';
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      
    <!-- include side navbar -->
    <?php
    include 'sidenav.php';
    ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <!-- Ndpr course starts here -->
            
      <!-- <section class="files">
          <div class="container">
            <div class="row">
              <div class="col-12">
              <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdcSPLmOF5A1roVXV1d-xuWCopMrsWue5zMJNffN5ahKB8HJw/viewform?embedded=true" width="640" height="5177" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>

            </div>
            </div>
          </div>
        </section> -->
  
  
<?php

$db = mysqli_connect('localhost', 'ndpracad_dpco', 'ndpruser123', 'ndpracad_dpco');
// $db = mysqli_connect('localhost', 'root', '', 'register');
     //Get info of the user
     $session_email = $_SESSION['email'];
     $session_password = $_SESSION['password'];
     $query = "SELECT * FROM users WHERE email='$session_email' AND password='$session_password'";
     $results = mysqli_query($db, $query);

      $result =  mysqli_fetch_assoc($results);

      $email = $result['email'];

$result2 = mysqli_query($db, "SELECT * FROM successful_payment_master WHERE email='$email' ORDER BY id");

 if (mysqli_num_rows($result2) > 0) {

    // output data of each row

    while($row = mysqli_fetch_assoc($result2)) {

        echo"

        <section class='files'>

         <div class='container'>

           <div class='row'>

            <div class='col-12'>              

           
            <iframe src='https://docs.google.com/forms/d/e/1FAIpQLSfQip5taMTHV0PIYYFvRNsmLyePk0Q-4G03gz8PKdZDaKNTaQ/viewform?embedded=true' width='700' height='520' frameborder='0' marginheight='0' marginwidth='0'>Loading…</iframe>


              </div>

            </div

          </div>

        </section>  



        ";

    }

} else { 



    echo "


        <section class='section'>

          <div class='container'>

              <div class='row'>

                 <div class='col-12'>

                     <p> You did not participate in this course</br> </p>

              </div>

              </div>
      
            </div>

          </div>

        </section>  

    ";

}



?>  

          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
    
<?php include "footer.php" ?>

</body>

</html>
