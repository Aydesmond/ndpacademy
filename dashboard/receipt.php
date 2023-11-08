<?php
require 'validate.php';
?>
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
  $phone = $result['phone'];

?>

<?php
$id = $_POST['id'];
$query = "SELECT * FROM successful_payment WHERE id='$id'";
$results = mysqli_query($db, $query);
 $result =  mysqli_fetch_assoc($results);



 $email = $result['email'];



 $receiptNo = $result['receipt_number'];



 $amount = $result['amount_paid'];



 //die($id);



?>



<html lang="en">



<head>



    <meta charset="UTF-8">



    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <title>Receipt - NDP Academy</title>



    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>



    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



    <link rel="stylesheet" href="invoice.css">







</head>



<body>







</body>







<div id="invoice">







    <div class="toolbar hidden-print">



        <div class="text-right">



            <button onclick="myFunction()" id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i>Click to
                Print</button>



            <!-- <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button> -->



        </div>



        <script>
        function myFunction() {



            window.print();



        }
        </script>



        <hr>



    </div>



    <div class="invoice overflow-auto">



        <div style="min-width: 600px">



            <header>



                <div class="row">



                    <div class="col">



                        <a target="_blank" href="dashboard.php">



                            <img class="img-fluid mb-4" src="images/logo.png" alt="logo" data-holder-rendered="true" />



                        </a>



                    </div>



                    <div class="col company-details">



                        <!-- <h2 class="name">



                            <a target="_blank" href="https://lobianijs.com">



                            Arboshiki



                            </a>



                        </h2> -->



                        <div>11th Floor, Ark Towers, Plot 17, <br> Ligali Ayorinde Street, Victoria Island, Lagos state.
                        </div>



                        <div>+234 810 701 7274</div>



                        <div>info@ndpacademy.ng</div>



                    </div>



                </div>



            </header>



            <main>



                <div class="row contacts">



                    <div class="col invoice-to">



                        <div class="text-gray-light">INVOICE TO:</div>



                        <h2 class="to"><?php echo $email ; ?></h2>







                    </div>



                    <div class="col invoice-details">



                        <h1 class="invoice-id"><?php echo $receiptNo ; ?></h1>



                        <div class="date">Date of Invoice: </div>



                        <div class="date">Due Date: </div>



                    </div>



                </div>



                <table border="0" cellspacing="0" cellpadding="0">



                    <thead>



                        <tr>



                            <th>#</th>



                            <th class="text-left">DESCRIPTION</th>



                            <th class="text-right">AMOUNT</th>



                            <th class="text-right">VAT</th>



                            <th class="text-right">TOTAL</th>



                        </tr>



                    </thead>



                    <tbody>



                        <tr>



                            <td class="no">01</td>



                            <td class="text-left">
                                <h3>Certified NDP Foundation Course </h3>
                            </td>



                            <td class="unit">₦<?php echo number_format($amount,2); ?></td>



                            <td class="qty">₦0</td>



                            <td class="total">₦<?php echo number_format($amount,2); ?></td>



                        </tr>



                    </tbody>



                    <tfoot>



                        <tr>



                            <td colspan="2"></td>



                            <td colspan="2">SUBTOTAL</td>



                            <td>₦0.00</td>



                        </tr>



                        <tr>



                            <td colspan="2"></td>



                            <td colspan="2">TAX</td>



                            <td>₦0.00</td>



                        </tr>



                        <tr>



                            <td colspan="2"></td>



                            <td colspan="2">GRAND TOTAL</td>



                            <td>₦<?php echo number_format($amount,2); ?></td>



                        </tr>



                    </tfoot>



                </table>



                <div class="thanks">Thank you!</div>



                <!-- <div class="notices">



                    <div>NOTICE:</div>



                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>



                </div> -->



            </main>



            <footer>



                Invoice was created on a computer and is valid without the signature and seal.



            </footer>



        </div>



        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->



        <div></div>



    </div>



</div>


<script type="script" src="receipt.js"> </script>
</body>



</html>