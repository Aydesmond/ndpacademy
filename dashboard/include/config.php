<?php

    //---------------------------------------------

    // CONFIG FILE FOR PASSWORD RESET SYSTEM //

    //---------------------------------------------



    // The name of your product (eg. Gmail)

    define("PRODUCT_NAME", "NDPR Academy");

    // The name of you company (eg. Google)

    define("COMPANY_NAME", "NDPR Academy"); 

    // Line 1 of your address

    define("ADDR_LINE_1", "68 Molade Okoya Thomas, Ajose Adeogun");

    // Line 2 of your address 

    define("ADDR_LINE_2", "Victoria Island, Lagos, Nigeria"); 

    // The email-id of your domain which would be seen in from field

    define("EMAIL_ID_FROM","info@ndpracademy.ng"); 

    // Link to file on your website where reset.php is stored

    define("RESET_PAGE_LOCATION", "https://ndpracademy.ng/dashboard/reset-password/reset.php");

    // Link to file on your website where email.php is stored

    define("EMAIL_PAGE_LOCATION", "https://ndpracademy.ng/dashboard/reset-password/email.php");

    // Link to file on your website where successfule registration message is stored

    define("EMAIL_REGISTRATION_SUCCESSFUL_PAGE_LOCATION", "https://ndpracademy.ng/dashboard/registration/successmessage.php");



    /* Here 'users' is the name of table where registered users are stored

    email - table column where email address of registered users are stored

    */

    function sqlf($email)

    {

        $sql = "SELECT * FROM users WHERE email='$email'"; // This query selects the user email from 'users' table

        return $sql;

    }

    /* Here 'forgot_pass' is the name of table where new generated tokens are stored

        email - email address of user who requested the password reset

        token - unique random generated token identifier for reset link

        expiry - 24 hours from time of request from which the link wont be a valid link

    */

    function sqlonef($email,$token,$expiry)

    {

        // SQL query to insert a new token request into the table 'forgot_pass'

        $sqlone =  "INSERT INTO forgot_pass(email,token,expiry) VALUE ('$email','$token','$expiry')";

        return $sqlone;

    }



    /* Here 'users' is the name of table where registered users are stored

        email - table column where email address of registered users are stored

        pass - table column where password encrypted using sha-512 are stored

    */

    function sqlresetf($email,$password)

    {

        // SQL Code to update the current password to new password in 'users' table

        $sqlreset =  "UPDATE users SET password='$password' WHERE email='$email'"; 

        return $sqlreset;

    }



    /* Here 'forgot_pass' is the name of table where new generated tokens are stored

        email - email address of user who requested the password reset

        token - unique random generated token identifier for reset link

        expiry - 24 hours from time of request from which the link wont be a valid link

    */

    function sqldelf($email,$token)

    {

        // SQL Code to delete the token entry from table once the user resets his password

        $sqldel = "DELETE FROM forgot_pass WHERE email='$email' AND token='$token'";

        return $sqldel;

    }

?>

