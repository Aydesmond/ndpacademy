<script src="js/cd.js"></script>
<?php
include 'include/foundationdbconnect.php';
 if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result2)) {
        echo"
            <div class='main-panel'>
            <div class='content-wrapper'>
            <div class='row'>
                <div class='col-md-12 grid-margin'>
                <div class='card'>
                <div class='card-body'>
                <h4 class='card-title'>You have made payment for this Course</h4>
                <p> Kindly click <a href='foundationcourse2020.php' class='btn btn-success'>here </a> to view your course modules </p>
                <p> </p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h4 class='card-title'>About Course</h4>
                <p> The NAC6B holds via Zoom Online Meeting on Friday, June 11, 2021 from 8:30am.
                      </p>
                </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        ";
    }

} else {
    echo "
    <div class='main-panel'>
    <div class='content-wrapper'>
     <div class='row'>
       <div class='col-md-12 grid-margin'>
         <div class='card'>
           <div class='card-body'>
             <h4 class='card-title'>Certified NDPR Foundation Course (NAC6B)</h4>
               <div class='row align-items-center mb-5'>
               <div class='col-xl-6 order-sm-3 order-xl-2 col-12 order-2'>
               <ul class='list-inline text-xl-center'>
                   <li class='list-inline-item mr-4 mb-3 mb-sm-0'>
                   <div class='d-flex align-items-center'>
                       <i class='ti-book text-primary icon-md mr-2'></i>
                       <div class='text-left'>

                       <h6 class='mb-0'>COURSES</h6>

                       <p class='mb-0'>1 Day</p>

                       </div>

                   </div>

                   </li>



               <li class='list-inline-item mr-4 mb-3 mb-sm-0'>

               <div class='d-flex align-items-center'>

                   <i class='ti-alarm-clock text-primary icon-md mr-2'></i>

                   <div class='text-left'>

                   <h6 class='mb-0'>DURATION</h6>

                   <p class='mb-0'>7 Hours</p>

                   </div>

               </div>

               </li>



               <li class='list-inline-item mr-4 mb-3 mb-sm-0'>

               <div class='d-flex align-items-center'>

                   <i class='ti-wallet text-primary icon-md mr-2'></i>

                   <div class='text-left'>

                   <h6 class='mb-0'>FEE</h6>

                   <p class='mb-0'>#75,000</p>

                   </div>

                   </div>

                   </li>

               </ul>

               </div>

   <div class='col-xl-3 text-sm-right text-left order-sm-2 order-3 order-xl-3 col-sm-6 mb-4 mb-xl-0'>
   <form>
   <a href='process-payment.php' class='btn btn-primary'>Pay Now</a>
   </form>
   </div>
   <div class='col-12 mt-4 order-4'>
     <div class='border-bottom border-primary'></div>
   </div>
   </div>
             <p class='card-description'>
               <h4 class='card-title'>Make Manual Payment</h4></p>
               <p class='manual'>
                   Manual Payment can be made into the following account <br>
                   Account Number: <strong>1021455361</strong> <br>
                   Account Name: <strong>21Search Limited</strong><br>
                   Bank Name: <strong>UBA</strong><br>
                   Kindly send payment receipt after payment has been made to <a href='mailto:info@ndpacademy.ng'>info@ndpacademy.ng</a><br>
                   On confirmation, your dashboard will be updated with the Course Modules, also a confirmation email will be sent to you.
               </p>
         <br>

   <h4 class='card-title'>The NDPR Academy® Master Course (The Practitioner Course)</h4>
   <p>The NDPR Academy® Master Course (The Practitioner Course) is an advanced programme on the NDPR and related laws in Nigeria with a strong bias for global cybersecurity issues. The following Modules and objectives make up the Master Course:</p>


   <p> <strong> Module 1:  Introduction to Nigeria Privacy Rights laws <br>
   Module 2: Principles of Personal Data Collection and Administration<br>

   Module 3: Rights of Data Subjects<br>

   Module 4: Obligations of Data Controllers and Administrators<br>

   Module 5: Local and International Transfer of Personal Data<br>

   Module 6: Data Protection Compliance Process- Audits and Impact Assessments <br>

   Module 7: NDPR Liabilities, Penalties and Remedies<br>

   </strong></p>

   <p>The Foundation Course is designed as an online or offline training, giving potential participants the required flexibility for and accessibility to the programme. The Certification Assessment is for an additional 1-hour that may be taken at any-time after the training including on the day of the training. The Class is designed to be interactive as participants would have access to their course ahead of the class.</p>

         <br>



               <p>

                   <h4 class='card-title'>About Course</h4></p>

                  <p> The NAC6B holds via Zoom Online Meeting on Friday, June 11, 2021 from 8:30am. </p> <br>



           </div>

         </div>

       </div>

     </div>

   </div>

    ";



}



?>



<!--

  <p id="demo"></p> -->
