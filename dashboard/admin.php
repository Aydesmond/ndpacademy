<?php

require 'validate.php';

?>

<link rel="stylesheet" href="css/style.css">



<?php

 //Get info of the user

 $session_email = $_SESSION['email'];

 $session_password = $_SESSION['password'];

  $query = "SELECT * FROM users WHERE email='$session_email' AND password='$session_password'";

  $results = mysqli_query($db, $query);

   $result =  mysqli_fetch_assoc($results);

   $email = $result['email'];

   //die($email);

 if($email != "avalonmsg@gmail.com"){

     header('location:dashboard.php');

 }

?>

<br />

<br />

<div class="container">

    <div class="row">



        <form action="admin.php" method="POST">

            <input type="email" name="email" class="form-control" placeholder="Email Address">

            <input type="text" name="amount_paid" class="form-control" placeholder="Amount Paid">

            <input type="text" name="course_id" class="form-control" placeholder="Course ID">

            <input type="text" name="receipt_number" class="form-control" placeholder="receipt Number">



            <button class="btn btn-primary mt-4" name="paid">Submit</button>
            <hr>



        </form>



    </div>

</div>



<div class="container">

    <div class="row">

        <div class="content">

            <p class="success">

                <!-- notification message -->



            <table class='table'>

                <!-- logged in user information -->

                <?php

    // $db = mysqli_connect('localhost', 'ndpracad_dpco', 'ndpruser123', 'ndpracad_dpco');

    $db = mysqli_connect('localhost', 'root', '', 'register');











    $result2 = mysqli_query($db, "SELECT * FROM successful_payment ORDER BY id DESC");

     if (mysqli_num_rows($result2) > 0) {



       echo"

        <thead>

          <tr>

            <th>Email</th>

            <th>Receipt number</th>

            <th>Course id</th>

            <th>Amount paid</th>

          </tr>

        </thead>";





       // output data of each row

        while($row = mysqli_fetch_assoc($result2)) {

            echo "<tbody>



            <tr>

              <td>".$row['email']."</td>

              <td>".$row['receipt_number']."</td>

              <td>".$row['course_id']."</td>

              <td>".$row['amount_paid']."</td>

            </tr>

          </tbody>" ;

           ;

        }



    } else {

        echo "0 results";

    }



   ?>

            </table>

            </p>

        </div>



    </div>

</div>



<!-- footer Include here -->





<?php



// connect to the database

$db = mysqli_connect('localhost', 'root', '', 'register');

    // $db = mysqli_connect('localhost', 'ndpracad_dpco', 'ndpruser123', 'ndpracad_dpco');


// REGISTER paid USER

if (isset($_POST['paid'])) {

  // receive all input values from the form

  $email = mysqli_real_escape_string($db, $_POST['email']);

  $amount_paid = mysqli_real_escape_string($db, $_POST['amount_paid']);

  $course_id = mysqli_real_escape_string($db, $_POST['course_id']);

  $receipt_number = mysqli_real_escape_string($db, $_POST['receipt_number']);



  // Finally, register user if there are no errors in the form



  	$query = "INSERT INTO successful_payment (email, amount_paid, course_id, receipt_number)

  			  VALUES('$email', '$amount_paid', '$course_id', '$receipt_number')";

    mysqli_query($db, $query);



  	header('location: admin.php');



}



?>



<?php include 'footer.php';?>







</body>

</html>
