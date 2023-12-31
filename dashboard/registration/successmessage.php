<?
if (isset($_POST['name'])) {
    require_once '../include/config.php';
    $name = trim($_POST['name']);
    $name = strip_tags($name);
    $name = htmlspecialchars($name);
    $reset_link = trim($_POST['reset_link']);
    $reset_link = strip_tags($reset_link);
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);
    ?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Welcome to NDP Academy</title>



</head>

<body
    style="-webkit-text-size-adjust:none;box-sizing:border-box;color:#74787e;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;height:100%;line-height:1.4;margin:0;width:100%!important"
    bgcolor="#F2F4F6">

    <style type="text/css">
    body {

        width: 100% !important;

        height: 100%;

        margin: 0;

        line-height: 1.4;

        background-color: #f2f4f6;

        color: #74787e;

        -webkit-text-size-adjust: none
    }



    @media only screen and (max-width: 600px) {

        .email-body_inner {

            width: 100% !important
        }



        .email-footer {

            width: 100% !important
        }

    }



    @media only screen and (max-width: 500px) {

        .button {

            width: 100% !important
        }

    }
    </style>

    <span class="preheader"
        style="box-sizing:border-box;display:none!important;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;font-size:1px;line-height:1px;max-height:0;max-width:0;mso-hide:all;opacity:0;overflow:hidden;visibility:hidden">Thank
        you for registering on NDP Academy</span>

    <table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0"
        style="box-sizing:border-box;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;margin:0;padding:0;width:100%"
        bgcolor="#F2F4F6">

        <tr>

            <td align="center"
                style="box-sizing:border-box;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;word-break:break-word">

                <table class="email-content" width="100%" cellpadding="0" cellspacing="0"
                    style="box-sizing:border-box;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;margin:0;padding:0;width:100%">

                    <tr>

                        <td class="email-masthead"
                            style="box-sizing:border-box;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;padding:25px 0;word-break:break-word"
                            align="center"><a href="https://ndpacademy.ng" class="email-masthead_name"
                                style="box-sizing:border-box;color:#bbbfc3;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;font-size:16px;font-weight:bold;text-decoration:none;text-shadow:0 1px 0 white">
                                <? echo constant("PRODUCT_NAME"); ?>
                            </a>

                        </td>

                    </tr>

                    <tr>

                        <td class="email-body" width="100%" cellpadding="0" cellspacing="0"
                            style="-premailer-cellpadding:0;-premailer-cellspacing:0;border-bottom-color:#edeff2;border-bottom-style:solid;border-bottom-width:1px;border-top-color:#edeff2;border-top-style:solid;border-top-width:1px;box-sizing:border-box;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;margin:0;padding:0;width:100%;word-break:break-word"
                            bgcolor="#FFFFFF">

                            <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0"
                                style="box-sizing:border-box;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;margin:0 auto;padding:0;width:570px"
                                bgcolor="#FFFFFF">

                                <tr>

                                    <td class="content-cell"
                                        style="box-sizing:border-box;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;padding:35px;word-break:break-word">

                                        <h1> Registration Successful </h1>
                                        Thank you for your interest in the NDP Academy®, We currently have two courses
                                        available in the NDP Academy. They include: <br>



                                        <p> <strong> 1. The Foundation Course: </strong> <br>

                                            This is a 2 day introductory training programme into Privacy Rights in
                                            Nigeria and the 2019 Nigeria Data Protection Regulation (NDPR). </p>



                                        <p> <strong> 2. The Master (Practitioner Course): </strong>

                                            This is an advanced programme on the NDP and related Laws in Nigeria with a
                                            strong bias for global data security issues. </p>




                                        <p> Please be informed that the NDP Academy Classes (Foundation and Practitioner
                                            Course) would commence from <strong> Friday, March 4th, 2023. </strong>
                                            <br>

                                            We would be glad to have you attend these classes. Please <a
                                                href="http://ndpacademy.ng/dashboard/dashboard.php">login</a> to your
                                            portal to complete your enrolment process.
                                        </p>



                                        Please feel free to respond to this email if you need further details.

                                    </td>

                                </tr>

                            </table>

                        </td>

                    </tr>

                    <tr>

                        <td
                            style="box-sizing:border-box;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;word-break:break-word">

                            <table class="email-footer" align="center" width="570" cellpadding="0" cellspacing="0"
                                style="box-sizing:border-box;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;margin:0 auto;padding:0;text-align:center;width:570px">

                                <tr>

                                    <td class="content-cell" align="center"
                                        style="box-sizing:border-box;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;padding:35px;word-break:break-word">

                                        <p class="sub align-center"
                                            style="box-sizing:border-box;color:#aeaeae;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;font-size:12px;line-height:1.5em;margin-top:0"
                                            align="center">© 2021
                                            <? echo constant("PRODUCT_NAME"); ?>. All rights

                                            reserved.
                                        </p>

                                        <p class="sub align-center"
                                            style="box-sizing:border-box;color:#aeaeae;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;font-size:12px;line-height:1.5em;margin-top:0"
                                            align="center">

                                            <? echo constant("COMPANY_NAME"); ?>

                                            <br />
                                            <? echo constant("ADDR_LINE_1"); ?>

                                            <br />
                                            <? echo constant("ADDR_LINE_2"); ?>

                                        </p>

                                    </td>

                                </tr>

                            </table>

                        </td>

                    </tr>

                </table>

            </td>

        </tr>

    </table>

</body>

</html>

<?

} ?>