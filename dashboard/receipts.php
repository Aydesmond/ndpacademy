<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Receipts - NDP Academy</title>
    <!-- include header -->

    <?php
    include 'header.php';
    ?>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
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
                        <section class="rece">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
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

$result2 = mysqli_query($db, "SELECT * FROM successful_payment WHERE email='$email' ORDER BY id");

 if (mysqli_num_rows($result2) > 0) {


    // output data of each row
    while($row = mysqli_fetch_assoc($result2)) {


        echo "" ;
        echo"
        <form method='POST' action='receipt.php'>
        <input name='id' value= ".$row['id']." style='display:none'>
        Course Title: NDPR Foundation Course
        <button type='submit'>View Receipt</button>

        </form>
        ";

    }



} else {

    echo "0 results";

}

?>
                                        <div class="container">

                                            <p></p>
                                        </div>
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


$result2 = mysqli_query($db, "SELECT * FROM successful_payment_master WHERE email='$email' ORDER BY id");

 if (mysqli_num_rows($result2) > 0) {

    // output data of each row

    while($row = mysqli_fetch_assoc($result2)) {

        echo "" ;

        echo"

        <form method='POST' action='receipt-master.php'>
        <input name='id' value= ".$row['id']." style='display:none'>
        Course Title: NDP Master Course

        <button type='submit'>View Receipt</button>
        </form>

        ";


    }


} else {
    echo "No Receipt for Master Course";

}

?>

                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>

                <?php include "footer.php" ?>

</body>

</html>