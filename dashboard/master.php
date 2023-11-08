
<?php

include 'include/mcdbconnect.php';

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
                <p> Kindly click <a href='mastercoursemodule.php' class='btn btn-danger'>here </a> to view your course modules </p>
                <p> </p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h4 class='card-title'> Would you like to take the NDP Academy Foundation Assessment test to determine your level of knowledge of the NDPR? </h4>
                <p> <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#Modal1'>Yes</button>
                      <button type='button' class='btn btn-default'>Maybe Later</button>
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
             <h4 class='card-title'>Certified NDP Master Course (NAC8M)</h4>

               <div class='row align-items-center mb-5'>
               <div class='col-xl-6 order-sm-3 order-xl-2 col-12 order-2'>
               <ul class='list-inline text-xl-center'>
                   <li class='list-inline-item mr-4 mb-3 mb-sm-0'>
                   <div class='d-flex align-items-center'>
                       <i class='ti-book text-primary icon-md mr-2'></i>
                       <div class='text-left'>
                       <h6 class='mb-0'>COURSES</h6>
                       <p class='mb-0'>2 Days</p>
                       </div>
                   </div>
                   </li>

               <li class='list-inline-item mr-4 mb-3 mb-sm-0'>
               <div class='d-flex align-items-center'>
                   <i class='ti-alarm-clock text-primary icon-md mr-2'></i>
                   <div class='text-left'>
                   <h6 class='mb-0'>DURATION</h6>
                   <p class='mb-0'>12 Hours</p>
                   </div>
               </div>
               </li>

               <li class='list-inline-item mr-4 mb-3 mb-sm-0'>
               <div class='d-flex align-items-center'>
                   <i class='ti-wallet text-primary icon-md mr-2'></i>
                   <div class='text-left'>
                   <h6 class='mb-0'>FEE</h6>
                   <p class='mb-0'>#150,000</p>
                   </div>
                   </div>
                   </li>
               </ul>
               </div>

   <div class='col-xl-3 text-sm-right text-left order-sm-2 order-3 order-xl-3 col-sm-6 mb-4 mb-xl-0'>
   <form>
   <a href='process-payment-master.php' class='btn btn-primary'>Pay Now</a>
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

   <p>The NDP Academy® Master Course (The Practitioner Course) is an advanced programme on the NDPR and related laws in Nigeria with a strong bias for global cybersecurity issues. The following Modules and objectives make up the Master Course:</p>

   <p> <strong> Module 1:  Principles of Data Processing: Lawfulness in Focus <br>

   Module 2: Principles of Data Subjects: DSAR’s in Focus<br>

   Module 3: Principles of Data processing: Security in focus<br>

   Module 4: The Data Protection officer<br>

   Module 5: Data Protection Audits<br>

   Module 6: Data Protection Impact and Assessments.</strong></p>

   <p>The Master Course (The Practitioner Course) is designed as an offline/online programme to be held on Friday, 4th – Saturday, 5th March, 2022 from 8:30am. It is designed as a 12-hours training for a maximum 25 participants per class. The certification assessment is for an additional 1-hour that may be taken at any-time after the training including on the day of the training. The 12-hours class is designed to be interactive as all course materials would have been sent electronically to registered Participants ahead of the class. NDPR Academy® offline classes are paperless. Participants must accordingly come for the class with their laptops. Internet facilities will be made available for the entire duration of the class and certification assessment. The Master Course alumnis will additionally be life-long members of the NDPR Academy®, having access to its vast resources on Personal Data protection in Nigeria.</p>
         <br>

               <br>
               </p>
           </div>
         </div>
       </div>
     </div>
   </div>
    ";

}

?>

<!-- Modal -->
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NDP Academy Foundation Assessment test</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="send_script.php">
        Confirm email address: <input type="email" class="form-control" name="email" required> <br />
        <div class="alert alert-warning" role="alert">
        A email will be sent to you with your assessment login details
        </div>
        <button type="submit" class="btn btn-primary" name="send_message_btn">Send</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
