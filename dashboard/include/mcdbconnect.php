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



?>
