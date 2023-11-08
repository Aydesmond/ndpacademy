<!DOCTYPE html>

<html lang="en">



<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Master Course Module</title>



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



<!-- logged in user information -->



<?php

// $db = mysqli_connect('localhost', 'ndpracad_dpco', 'ndpruser123', 'ndpracad_dpco');
$db = mysqli_connect('localhost', 'root', '', 'register');
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
            <a href='modules/mastercourse/module1.php' class='btn btn-danger' target='_blank'>Module 1 - Principles of Personal Data Processing - Lawfulness in Focus  </a>

            <hr>

            <a href='modules/mastercourse/module2.php' class='btn btn-danger' target='_blank'>Module 2 - Module 2 - Rights of Data Subjects - DSAR in Focus </a>

            <hr>

            <a href='modules/mastercourse/module3.php' class='btn btn-danger' target='_blank'>Module 3 - Principles of Personal Data Processing - Security in Focus </a>

            <hr>

            <a href='modules/mastercourse/module4.php' class='btn btn-danger' target='_blank'>Module 4 - The Data Protection Officer </a>

            <hr>

            <a href='modules/mastercourse/module5.php' class='btn btn-danger' target='_blank'>Module 5 - Local and International Transfers of Personal Data </a>

            <hr>

            <a href='modules/mastercourse/module6.php' class='btn btn-danger' target='_blank'>Module 6 - Data Protection Impact Assessments </a>

            <hr>

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
                     <p> You do not have access to this page because you're yet to make payment. </br> </p>
              </div>
              </div>
              <form>
              <a href='process-payment-master.php' class='btn btn-danger'>Pay Now</a>
              </form>
            </div>
          </div>
        </section>
    ";

}



?>

<div class="container">

<p></p>

</div>



<?php include "footer.php" ?>



</body>

</html>
