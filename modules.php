<?php

require 'validate.php';

?>

<style>



a{

    color:white;

}

.button {

  background-color: #1b1b1b;

  border: none;

  color: white;

  padding: 15px 32px;

  text-align: center;

  text-decoration: none;

  display: inline-block;

  font-size: 16px;

  margin: 4px 2px;

  cursor: pointer;

  opacity: 0.8;

}

.button:hover 

{opacity: 1}





</style>

<!-- header include -->

<?php include 'header.php' ?>







<br>

<p></p>

<p></p>

<p></p>

<br>

<p></p>

<p></p>

<p></p>









<!-- logged in user information -->

<?php

    $db = mysqli_connect('localhost', 'ndpracad_dpco', 'ndpruser123', 'ndpracad_dpco');



    

         //Get info of the user

         $session_username = $_SESSION['username'];

         $session_password = $_SESSION['password'];

         $query = "SELECT * FROM users WHERE username='$session_username' AND password='$session_password'";

         $results = mysqli_query($db, $query);

          $result =  mysqli_fetch_assoc($results);

          $email = $result['email'];



    $result2 = mysqli_query($db, "SELECT * FROM successful_payment WHERE email='$email' ORDER BY id");

     if (mysqli_num_rows($result2) > 0) {

        // output data of each row

        while($row = mysqli_fetch_assoc($result2)) {

            echo "" ;

            echo"

            <section class='section'>

             <div class='container'>

               <div class='row'>

                <div class='col-12'>

                  

                  <button class='button'><a href='https://ndpracademy.ng/resources/Module 1-INTRODUCTION TO NIGERIA PRIVACY RIGHTS LAW.pdf'>Module 1 - INTRODUCTION TO NIGERIA PRIVACY RIGHTS LAW</button> <br>



                  <button class='button'><a href='https://ndpracademy.ng/resources/Module 2 - Principles of Personal Data Processing.pdf'>Module 2 - Principles of Personal Data Processing</button> <br>



                  <button class='button'><a href='https://ndpracademy.ng/resources/Module 3 - Rights of Data Subjects (1).pdf'>Module 3 - Rights of Data Subjects</button> <br>



                  <button class='button'><a href='https://ndpracademy.ng/resources/Module 4 - Obligations of Data Controllers and Data Administrators.pdf'>Module 4 - Obligations of Data Controllers and Data Administrators</button> <br>



                  <button class='button'><a href='https://ndpracademy.ng/resources/Module 5 - Local and International Transfers of Personal Data (1).pdf'>Module 5 - Local and International Transfers of Personal Data</button> <br>



                  <button class='button'><a href='https://ndpracademy.ng/resources/Module 6 - Data Protection Compliance Processes - Audits and Impact Assessments (1).pdf'>Module 6 - Data Protection Compliance Processes - Audits and Impact Assessments</button> <br>



                  <button class='button'><a href='https://ndpracademy.ng/resources/Module 7 - NDPR Liabilities, Penalties and Remedies.pdf'>Module 7 - NDPR Liabilities, Penalties and Remedies</button> <br>





                  </div>

                </div>

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

        

       <p> You do not have access to this page because you're yet to make payment. </p>

        

                  </div>

                </div>

              </div>

            </section>  

        ";

        

    }



   ?>





<!-- footer Include here -->



<?php include 'footer.php';?> 



<!-- jQuery -->

<script src="plugins/jQuery/jquery.min.js"></script>

<!-- Bootstrap JS -->

<script src="plugins/bootstrap/bootstrap.min.js"></script>

<!-- slick slider -->

<script src="plugins/slick/slick.min.js"></script>

<!-- aos -->

<script src="plugins/aos/aos.js"></script>

<!-- venobox popup -->

<script src="plugins/venobox/venobox.min.js"></script>

<!-- mixitup filter -->

<script src="plugins/mixitup/mixitup.min.js"></script>

<!-- google map -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>

<script src="plugins/google-map/gmap.js"></script>



<!-- Main Script -->

<script src="js/script.js"></script>



</body>

</html>