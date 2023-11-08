<?php

// $db = mysqli_connect('localhost', 'ndpracad_dpco', 'ndpruser123', 'ndpracad_dpco');

$db = mysqli_connect('localhost', 'root', '', 'register');

session_start();

                   

//Get info of the user

$session_email = $_SESSION['email'];

$session_password = $_SESSION['password'];

 $query = "SELECT * FROM users WHERE email='$session_email' AND password='$session_password'";

 $results = mysqli_query($db, $query);

  $rows =  mysqli_num_rows($results);



  //die($email);

if($rows != 1){

    header('location:../login.php');

}

?>