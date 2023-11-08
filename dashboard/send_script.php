<?php 
if(isset($_POST['send_message_btn'])){
    $email = $_POST['email'];
    $to = "a.desmond@taxaide.com.ng";
    $from = $_POST['email'];
    $subject = "NDPR Academy submission";
    $message = $email . " will like to take the NDPR Academy Assessment test" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Thank you " . $email . ", Your login details will be sent to your shortly.";
    echo "<script>setTimeout(\"location.href = 'ndpr-master.php';\",2300);</script>";
    }
?>