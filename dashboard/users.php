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


<div class="container">
    <div class="row">
        <div class="content">
            <p class="success">


                <!-- export -->

                <a class="btn btn-primary mt-4" href="export.php">Export to excel</a>



            <table class='table'>
                <!-- logged in user information -->
                <?php
    // $db = mysqli_connect('localhost', 'ndpracad_dpco', 'ndpruser123', 'ndpracad_dpco');
    $db = mysqli_connect('localhost', 'root', '', 'register');





    $result2 = mysqli_query($db, "SELECT * FROM users ORDER BY id DESC");
     if (mysqli_num_rows($result2) > 0) {

       echo"
       <div class='container'>
       <div class='row'>
        <thead>
          <tr>
            <th>Firstname</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>Organisation</th>
            <th>Phone Number</th>
            <th>Course</th>
            <th>Delete</th>



          </tr>
        </thead>
        </div>
        </div>

        ";


       // output data of each row
        while($row = mysqli_fetch_assoc($result2)) {
            echo "<tbody>

            <tr>
              <td>".$row['firstname']."</td>
              <td>".$row['lastname']."</td>
              <td>".$row['email']."</td>
              <td>".$row['organisation']."</td>
              <td>".$row['phone']."</td>
              <td>".$row['course']."</td>


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
            <a href="dashboard.php">Go home</a>
        </div>

    </div>
</div>
<!-- footer Include here -->

<?php include 'footer.php';?>



</body>

</html>