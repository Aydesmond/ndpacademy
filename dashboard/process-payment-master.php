<?php

require 'validate.php';

?>

<?php

// $username = $_SESSION['username'];

// $password = $_SESSION['password'];



// // connect to the database

// $db = mysqli_connect('localhost', 'root', '', 'registration');

// $user = mysqli_query($db, "SELECT * FROM users WHERE username='$username' AND password='$password'");

// $userDetails = mysqli_fetch_assoc($user);



// $email = $userDetails['email'];

// $uniqueKey = uniqid();

// $amount = 0;

// $phone = "08160416180";

// echo("https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay?PBFPubKey=FLWPUBK-c2b67d7db91834738aa7e2953faa2824-X&"."txref=".$uniqueKey."&amount=".$amount."&customer_email=".$email."&customer_phone=".$phone."&redirect_url=goal.com");



// //Start API request

// $curl = curl_init();



// curl_setopt_array($curl, array(

//     CURLOPT_URL => "https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay?PBFPubKey=FLWPUBK-c2b67d7db91834738aa7e2953faa2824-X&"."txref=".$uniqueKey."&amount=".$amount."&customer_email=".$email."&customer_phone=".$phone."&redirect_url=goal.com",

//     CURLOPT_RETURNTRANSFER => true,

//   CURLOPT_ENCODING => "",

//   CURLOPT_MAXREDIRS => 10,

//   CURLOPT_TIMEOUT => 30,

//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

//   CURLOPT_CUSTOMREQUEST => "POST",

//   CURLOPT_HTTPHEADER => array(

//     "Accept: */*",

//     "Accept-Encoding: gzip, deflate",

//    "Cache-Control: no-cache",

//     "Connection: keep-alive",

//     "Content-Length: 0",

//     "Host: api.ravepay.co",

//     "Postman-Token: 3aa89773-9304-4432-a664-fd3dca3c3c4d,de99fe70-a0ca-4179-b019-245dfdfc0dcb",

//     "User-Agent: PostmanRuntime/7.19.0",

//     "cache-control: no-cache"

//   ),

// ));



// $response = curl_exec($curl);

// $err = curl_error($curl);



// curl_close($curl);



// if ($err) {

//   echo "cURL Error #:" . $err;

// } else {

//   echo $response;

// }



// $transaction = json_decode($response);

// header('Location: '. $transaction->data->link);

?>



<?php

$curl = curl_init();









 $email = $_SESSION['email'];

$password = $_SESSION['password'];



// connect to the database

$db = mysqli_connect('localhost', 'ndpracad_dpco', 'ndpruser123', 'ndpracad_dpco');

$user = mysqli_query($db, "SELECT * FROM users WHERE email='$email' AND password='$password'");

$userDetails = mysqli_fetch_assoc($user);

//echo($userDetails['email']); 

//exit();



$customer_email = $userDetails['email'];

//$customer_email = 'info@ndpracademy.ng';

$txref = uniqid().md5(date())."courseTitle:1";

//die(explode("courseTitle:",$txref)[1]);

$amount = 150000;

$currency = "NGN";

$redirect_url = "https://ndpacademy.ng/dashboard/verify-payment-master.php";

$phone = "08160416180";





curl_setopt_array($curl, array(

  CURLOPT_URL => "https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay",

  CURLOPT_RETURNTRANSFER => true,

  CURLOPT_CUSTOMREQUEST => "POST",

  CURLOPT_POSTFIELDS => json_encode([

    'amount'=>$amount,

    'customer_email'=>$customer_email,

    'currency'=>$currency,

    'txref'=>$txref,

    'PBFPubKey'=>'FLWPUBK-c2b67d7db91834738aa7e2953faa2824-X',

    'redirect_url'=>$redirect_url,

    'payment_plan'=>$payment_plan

  ]),

  CURLOPT_HTTPHEADER => [

    "content-type: application/json",

    "cache-control: no-cache"

  ],

));



$response = curl_exec($curl);

$err = curl_error($curl);



if($err){

  // there was an error contacting the rave API

  die('Curl returned error: ' . $err);

}



$transaction = json_decode($response);



if(!$transaction->data && !$transaction->data->link){

  // there was an error from the API

  print_r('API returned error: ' . $transaction->message);

}



// uncomment out this line if you want to redirect the user to the payment page

//print_r($transaction->data->message);





// redirect to page so User can pay

// uncomment this line to allow the user redirect to the payment page

header('Location: ' . $transaction->data->link);

?>