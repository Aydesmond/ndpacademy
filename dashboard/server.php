<?php
    session_start();
    // Include database config
    require_once 'include/db.php';
    // Include our config file
    require_once 'include/config.php';
    // initializing variables

    // $username = "";
    $email    = "";
    $errors = array();
    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'register');
    // $db = mysqli_connect('localhost', 'ndpracad_dpco', 'ndpruser123', 'ndpracad_dpco');

    // REGISTER USER

    if (isset($_POST['reg_user'])) {
        // receive all input values from the form
        $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
        // $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $organisation = mysqli_real_escape_string($db, $_POST['organisation']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $course = mysqli_real_escape_string($db, $_POST['course']);

        // form validation: ensure that the form is correctly filled ...

        // by adding (array_push()) corresponding error unto $errors array

        // if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($email)) {
            array_push($errors, "Email is required");
        }

        if (empty($password_1)) {
            array_push($errors, "Password is required");
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        // first check the database to make sure
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        if ($user) { // if user exists
            if ($user['email'] === $email) {
                array_push($errors, "email already exists");
            }
        }

        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database
            $query  =   "INSERT INTO users (firstname, lastname, email, password, organisation, phone, course)

                        VALUES('$firstname', '$lastname', '$email', '$password', '$organisation', '$phone', '$course')";

            mysqli_query($db, $query);

            $_SESSION['email']      = $email;



            $_SESSION['password']   = $password;

            // Subject for sending email to user



            $subject = "Welcome to NDP Academy";



            $url = constant("EMAIL_REGISTRATION_SUCCESSFUL_PAGE_LOCATION");



            $data = array('name' => '$name', 'email' => $email);


            // Send a post request to our email template file to get the generated message body for password reset email



            $options = array(



                'http' => array(



                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",



                    'method' => 'POST',



                    'content' => http_build_query($data)



                )



            );



            $context = stream_context_create($options);



            // Fetch the generated code to variable



            $result = file_get_contents($url, false, $context);



            if (!($result === FALSE)) {



                //send email here!



                $headers = "MIME-Version: 1.0" . "\r\n";



                // Specify the content of mail is of HTML type



                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



                $headers .= "From: " . constant("EMAIL_ID_FROM") . "\r\n";



                // Send mail using php mail function



                if (mail($email, $subject, $result, $headers)) {



                    echo '<div class="alert alert-success alert-dismissable">


                             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                            <h1> Registration Successful </h1>


                            Hi, Thank you for your interest in the NDPR Academy®, We currently have two courses available in the NDPR Academy. They include: <br>

                                <strong> 1.  The Foundation Course: </strong> <br>



                                This is a 7-hours online introductory training programme into Privacy Rights in Nigeria and the 2019 Nigeria Data Protection Regulation (NDPR). <br>

                                <strong> 2.  The Master (Practitioner Course): </strong>

                                This is an advanced programme on the NDPR and related Laws in Nigeria with a strong bias for global data security issues.

                               <p> Please be informed that the NDPR Academy Classes (Foundation and Practitioner Course) would commence from <strong> Wednesday, June 17, 2020. </strong> <br>



                                We would be glad to have you attend these classes. Please login to your portal to complete your enrolment process. </p>







                                Please feel free to respond to this email if you need further details.







                        </div>';



                } else {



                    echo '<div class="alert alert-danger alert-dismissable">



                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>



                            Registration successful. Thanks so much for signing up. We are unable to send you an acknowledgement mail at this time. However, we have added your mail to our mailing list for followup.<br/>



                            You can unsubscribe by sending email to info@ndpacademy.ng<br/>Thank you.



                        </div>';



                }



                $_SESSION['success'] = "You are now logged in";



            }



            $_SESSION['success']    = "You are now logged in";



            header('location: dashboard/dashboard.php');



        }



    }







    // ...



    // ...







    // LOGIN USER



    if (isset($_POST['login_user'])) {



        $email = mysqli_real_escape_string($db, $_POST['email']);



        $password = mysqli_real_escape_string($db, $_POST['password']);







        if (empty($email)) {



            array_push($errors, "email is required");



        }



        if (empty($password)) {



            array_push($errors, "Password is required");



        }







        if (count($errors) == 0) {



            $password = md5($password);



            $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";



            $results = mysqli_query($db, $query);



            if (mysqli_num_rows($results) == 1) {



                $_SESSION['email'] = $email;



                $_SESSION['password'] = $password;



                $_SESSION['success'] = "You are now logged in";



                //redirect to dashboard



                header('location: dashboard/dashboard.php');



            }else {



                array_push($errors, "Wrong email/password combination");



            }



        }



    }



?>
