<?php include('dashboard/server.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142135369-4"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-142135369-4');
    </script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Sign Up - NDP Academy</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ** Plugins Needed for the Project ** -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <!-- animation css -->
    <link rel="stylesheet" href="plugins/animate/animate.css">
    <!-- aos -->
    <link rel="stylesheet" href="plugins/aos/aos.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="plugins/venobox/venobox.css">
    <!-- icon lib -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ?>
    <!-- /header -->
    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link"></a>
                        </li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- /page title -->

    <!-- Register form starts here -->
    <section id="signup-form">
        <form action="signup.php" method="post">
            <?php include('errors.php'); ?>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                        <div class="row">
                            <div class="col text-center">
                                <h1>Register</h1>
                            </div>
                        </div>
                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="text" name="firstname" class="form-control" placeholder="First Name"
                                    required>
                            </div>
                            <div class="col">
                                <input type="text" name="lastname" class="form-control" placeholder="Last Name"
                                    required>
                            </div>
                        </div>

                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="email" name="email" value="<?php echo $email; ?>" class="form-control"
                                    placeholder="Email Address" required>
                            </div>
                        </div>

                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="password" name="password_1" class="form-control"
                                    placeholder="Password (Minimum of 8 characters)" required minlength="8">
                            </div>

                            <div class="col">
                                <input type="password" name="password_2" class="form-control"
                                    placeholder="Confirm Password" required>
                            </div>
                        </div>

                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="text" name="organisation" class="form-control" placeholder="Organisation"
                                    required>
                            </div>
                        </div>

                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number"
                                    required>
                            </div>
                        </div>

                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <label for="course">Select Course:</label>
                                <select id="courseoption" name="course" class="form-control">
                                    <option value="foundationcourseNAC13B">Certified NDP Foundation Course</option>
                                    <option value="mastercourseNAC12M">Certified NDP Master Course</option>
                                    <option value="bothcourse2023">Both</option>
                                </select>
                            </div>
                        </div>
                        <p></p>
                        <div class="row justify-content-start mt-4">
                            <div class="col">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" required>
                                        I Read and Accept <a href="privacy-policy.php">Terms and Conditions</a>
                                    </label>
                                </div>
                                <button class="btn btn-primary mt-4" name="reg_user">Submit</button>
                                <hr>
                                <p> <a href="login.php" id="logp"><b> Have an account? Click here to <span id="signin">
                                                Login </span></b></a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!-- Register form ends here -->
    <p></p>
    <br>
    <p></p>
    <?php include 'footer.php' ?>
</body>

</html>
