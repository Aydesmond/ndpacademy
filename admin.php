<?php
require 'validate.php';
?>

<?php
 //Get info of the user
 $session_username = $_SESSION['username'];
 $session_password = $_SESSION['password'];
  $query = "SELECT * FROM users WHERE username='$session_username' AND password='$session_password'";
  $results = mysqli_query($db, $query);
   $result =  mysqli_fetch_assoc($results);
   $email = $result['email'];
   //die($email);
 if($email != "aydesmondng@gmail.com"){
     header('location:dashboard.php');
 }
?>

<!-- header include -->
<?php include 'header.php' ?>



<div class="container">
  <div class="row">
<div class="content">
<p class="success">
<!-- notification message -->

<table class='table'>
    <!-- logged in user information -->
   <?php
    $db = mysqli_connect('localhost', 'ndpracad_dpco', 'ndpruser123', 'ndpracad_dpco');

    
        

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