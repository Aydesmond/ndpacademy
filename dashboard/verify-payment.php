<?php
require 'validate.php';
?>

<?php
//die($_GET['txref']);

    if (isset($_GET['txref'])) {
        $ref = $_GET['txref'];
        $amount = 75000; //Correct Amount from Server
        $currency = ""; //Correct Currency from Server
        $courseId =  explode("courseTitle:",$ref)[1];
        $query = array(
            "SECKEY" => "FLWSECK-22643d6c7d1d95e7d2df8d9610295e6c-X",
            "txref" => $ref
        );
        $data_string = json_encode($query);
        $ch = curl_init('https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/verify');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $response = curl_exec($ch);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);
        curl_close($ch);
        $resp = json_decode($response, true);
         $paymentStatus = $resp['data']['status'];
        $chargeResponsecode = $resp['data']['chargecode'];
        $chargeAmount = $resp['data']['amount'];
        $chargeCurrency = $resp['data']['currency'];
        if (($chargeResponsecode == "00" || $chargeResponsecode == "0")) {
            $db = mysqli_connect('localhost', 'ndpracad_dpco', 'ndpruser123', 'ndpracad_dpco');

         //Get info of the user

         $session_email = $_SESSION['email'];

         $session_password = $_SESSION['password'];

         $query = "SELECT * FROM users WHERE email='$session_email' AND password='$session_password'";

         $results = mysqli_query($db, $query);

          $result =  mysqli_fetch_assoc($results);

          $email = $result['email'];

         //Insert the info into the database

         $count =  mysqli_num_rows(mysqli_query($db, "SELECT * FROM successful_payment ORDER BY id"));

         $receiptNo = "NDPR".$count.substr(md5($count),1,4);

         $query2 = "INSERT INTO successful_payment (email, amount_paid, course_id, receipt_number)

         VALUES('$email', '$chargeAmount', '$courseId', '$receiptNo')";

         $save = mysqli_query($db, $query2);

         if($save){


           // echo("Payment successful and saved");


           header('location:receipts.php');

         }

         else{


            echo("Payment successful but not saved");


         }





        }


        else {


           echo("Payment Error");


        }


    }


                 else {


      die('No reference supplied');


    }





?>
