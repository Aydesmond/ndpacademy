











  <!-- partial:partials/_navbar.html -->



  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">



      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">



        <a class="navbar-brand brand-logo mr-5" href="dashboard.php"><img src="images/logo.png" class="mr-2" alt="logo"/></a>



        <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="images/logo.png" alt="logo"/></a>



      </div>



      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">



            <!-- notification message -->



            <?php if (isset($_SESSION['success'])) : ?>



              <div class="error success" >



                <h3>



                  <?php



                    echo $_SESSION['success'];



                    unset($_SESSION['success']);



                  ?>



                </h3>



              </div>



          <?php endif?>











        <ul class="navbar-nav navbar-nav-right">



        <li class="nav-item mr-1">



        <?php



$db = mysqli_connect('localhost', 'root', '', 'register');



// $db = mysqli_connect('localhost', 'ndpracad_dpco', 'ndpruser123', 'ndpracad_dpco');







     //Get info of the user







     $session_email = $_SESSION['email'];



     $session_password = $_SESSION['password'];



     $query = "SELECT * FROM users WHERE email='$session_email' AND password='$session_password'";



     $results = mysqli_query($db, $query);



      $result =  mysqli_fetch_assoc($results);



      $email = $result['email'];



      $result2 = mysqli_query($db, "SELECT * FROM users WHERE email='$email' ORDER BY id");



     if (mysqli_num_rows($result2) > 0) {







      // output data of each row



       while($row = mysqli_fetch_assoc($result2)) {



        echo "" ;







        echo"   Hi $row[firstname] $row[lastname]



        ";



        }



        } else {



        echo "0 results";



        }



      ?>







        </li>



          <li class="nav-item dropdown mr-1">



            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">



              <i class="ti-email mx-0"></i>



            </a>



            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">



              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>



              <a class="dropdown-item">



                <div class="item-thumbnail">



                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">



                </div>



                <div class="item-content flex-grow">



                  <h6 class="ellipsis font-weight-normal">NDP Academy



                  </h6>



                  <p class="font-weight-light small-text text-muted mb-0">



                    Thank you for registering



                  </p>



                </div>



              </a>







            </div>



          </li>



          <li class="nav-item dropdown">



            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">



              <i class="ti-bell mx-0"></i>



              <span class="count"></span>



            </a>



            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">



              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>



              <a class="dropdown-item">



                <div class="item-thumbnail">



                  <div class="item-icon bg-success">



                    <i class="ti-info-alt mx-0"></i>



                  </div>



                </div>



                <div class="item-content">



                  <h6 class="font-weight-normal">Succesfully Logged In</h6>



                  <p class="font-weight-light small-text mb-0 text-muted">



                    Just now



                  </p>



                </div>



              </a>







            </div>



          </li>



          <li class="nav-item nav-profile dropdown">



            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">



              <img src="images/faces/face28.jpg" alt="profile"/>



            </a>



            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">



              <a class="dropdown-item">



                <i class="ti-settings text-primary"></i>



                Settings



              </a>



              <a href="logout.php" class="dropdown-item">



              <i class="ti-power-off text-primary"></i>



                Logout



              </a>



            </div>



          </li>



        </ul>



        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">



          <span class="ti-view-list"></span>



        </button>



      </div>



    </nav>
