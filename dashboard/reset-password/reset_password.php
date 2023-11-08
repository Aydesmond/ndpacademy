<?php

if (isset($_POST['email'])) {

    require_once '../include/db.php';
    require_once '../include/config.php';

    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);
    $password = trim($_POST['password']);
    $password = strip_tags($password);
    $password = htmlspecialchars($password);

    $password = md5($password);//encrypt the password before saving in the database

    if (mysqli_query($con, sqlresetf($email, $password))) { // Update the password to new password chosen by user

        if (mysqli_query($con, sqldelf($email, $token))) { // Delete the token entry from database (so the link we generated is one time only link)

            echo '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 Password has been reset for account ' . $email . '</div>';
        }
    } else {
        echo '<div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> Password Reset Failed. Please try again.
</div>';
    }
    mysqli_close($con);
}
?>