<!DOCTYPE html>

<html lang="en">



<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>NDP Master Course</title>



  <!-- include header -->

    <?php

    include 'header.php';

    ?>



<body>

  <div class="container-scroller">

  <!-- navbar include -->

  <?php 

    include 'navbar.php';

    ?>
    <div class="container-fluid page-body-wrapper">

    <!-- include side navbar -->

    <?php

    include 'sidenav.php';

    ?>

      
      <!-- content-wrapper partial -->

<?php include 'master.php' ?>
        <!-- content-wrapper ends -->
<p></p>
<br>
           <!-- footer include -->

          <!-- pop up -->

          <?php
          
          // include 'modal.php' 

          ?>

          <!-- pop up ends -->



    <?php    include 'footer.php'    ?>



</body>



</html>



<script> 



$(function() {

    $("#myModal").modal();

});

    </script>

    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha256-1A78rJEdiWTzco6qdn3igTBv9VupN3Q1ozZNTR4WE/Y=" crossorigin="anonymous"></script>

