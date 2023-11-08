<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Foundation Course Module</title>
  <!-- include header -->
    <?php
    include 'header.php';
    ?>
<body>
  <div class="container-scroller">
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

$result2 = mysqli_query($db, "SELECT * FROM users WHERE email='$email' ORDER BY id");

 if (mysqli_num_rows($result2) > 0) {
    while($row = mysqli_fetch_assoc($result2)) {

        echo"

        <section class='files'>
         <div class='container'>
           <div class='row'>
            <div class='col-12'>
             <a href='https://ndpracademy.ng/resources/Belgian%20Supreme%20Court-RTBF%20case.pdf' class='btn btn-primary' target='_blank'>Belgian Supreme Court-RTBF case</a>

             <hr>

             <a href='https://ndpracademy.ng/resources/Google%20Spain%20SL,%20Google%20Inc%20v%20AEPD%20and%20Mario%20Costeja%20Gonzalez.pdf' class='btn btn-primary' target='_blank'>Google Spain SL, Google Inc v AEPD and Mario Costeja Gonzalez </a>

             <hr>

             <a href='https://ndpracademy.ng/resources/WM%20Morrison%20Supermarket%20pls%20vs%20Various%20Claimants.pdf' class='btn btn-primary' target='_blank'>WM Morrison Supermarkets plc (Appellant) v Various Claimants (Respondents)  </a>

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
                     <p> You do not have access to this page because you're yet to make payment. <br>  </p>
              </div>
            </div>
            <form>
            <a href='process-payment.php' class='btn btn-primary'>Pay Now</a>
            </form>
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
