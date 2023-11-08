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
$db = mysqli_connect('localhost', 'ndpracad_dpco', 'ndpruser123', 'ndpracad_dpco');
// $db = mysqli_connect('localhost', 'root', '', 'register');
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
             <a href='https://ndpracademy.ng/resources/DPIA Tool.xlsx' class='btn btn-primary' target='_blank'>DPIA Tool</a> 

            <hr>

            
            <a href='https://ndpracademy.ng/resources/Data Protection Policy.rtf.docx' class='btn btn-primary' target='_blank'>Data Protection Policy</a> 

            <hr>

            <a href='https://ndpracademy.ng/resources/Disaster Recovery Policy.docx' class='btn btn-primary' target='_blank'>Disaster Recovery Policy</a> 

            <hr>

            <a href='https://ndpracademy.ng/resources/(Taxtech) GAP Analysis Template.xlsx' class='btn btn-primary' target='_blank'> GAP Analysis Template</a> 

            <hr>

            <a href='https://ndpracademy.ng/resources/Document Retention Policy.doc' class='btn btn-primary' target='_blank'>Document Retention Policy</a> 

            <hr>

            
            <a href='https://ndpracademy.ng/resources/Data Protection Tool Kit Schedule.xlsx' class='btn btn-primary' target='_blank'>Data Protection Tool Kit Schedule</a> 

            <hr>

             <a href='https://ndpracademy.ng/resources/Draft Data Subject Access Request Register.xlsx' class='btn btn-primary' target='_blank'>Draft Data Subject Access Request Register</a> 

             <hr>


             <a href='https://ndpracademy.ng/resources/Data Breach Incident Management Policy.docx' class='btn btn-primary' target='_blank'>Data Breach Incident Management Policy</a> 

             <hr>            

             <a href='https://ndpracademy.ng/resources/Personal data breach notification letter notifying a personal data breach to data subjects.doc.docx' class='btn btn-primary' target='_blank'>Personal data breach notification letter notifying a personal data breach to data subjects</a> 

             <hr>

             <a href='https://ndpracademy.ng/resources/Privacy Policy Template.docx' class='btn btn-primary' target='_blank'>Privacy Policy Template</a> 

             <hr>
             
             <a href='https://ndpracademy.ng/resources/Template Data Protection Clause for Agreements.docx ' class='btn btn-primary' target='_blank'>Template Data Protection Clause for Agreements</a> 

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