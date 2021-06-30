<?php
session_start();
error_reporting(1);
include('connection.php');
$utmid=$_SESSION['create_account_logged_in'];
extract($_REQUEST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>UTM Class Information System</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
      <!--/.Navbar -->

    <?php
       $sql= mysqli_query($con,"select ca.*, li.* from create_account ca, lecturer_info li where ca.lecturer6=li.lecturer_name AND utmid='$utmid'");
       $result=mysqli_fetch_assoc($sql);
    ?>

    <footer class="page-footer font-small grey lighten-4 py-3">
        <div class="container">
        
          <div class="row">
            <div class="col-md-6 d-flex justify-content-start">
    
              <div class="footer-copyright text-center bg-transparent">
                &ensp;&ensp;<a href="dashboard.php" style="color:black"><b>/ Home</b></a>&ensp;
                <a href="lecturerinfo.php" style="color:black"><b>/ Lecturer Information</b></a>&ensp;
                <a href="#" style="color:black"><b>/ Lecturer Profile</b></a>&ensp;
              </div>
            </div>
          </div>
        </div>
        </footer>
        <br>
        <br>
        <div class="container">
        <h1>Lecturer Information</h2>
        <hr>
    </div>

    <div class="container my-5 pt-1 pb-1 z-depth-1 text-center">
        <img src="img/lecturer/<?php echo $result['picture']; ?>"  style="width:300px;height:300px;" class="img-thumbnail" alt="...">
        <br>
        <br>
        <h2><b>Name: </b><?php echo $result['lecturer6']; ?></h2>
        <h4><b>Email: </b><?php echo $result['email']; ?></h4>
        <h4><b>Phone: </b><?php echo $result['phone']; ?></h4>
        <h4><b>Office: </b><?php echo $result['office']; ?></h4>
    </div>

    <!-- Footer -->
<footer class="page-footer font-large" style="background-color: #573D34 !important;">
 
 <!-- Footer Elements -->
 <div class="container">
   <h3 style="font-weight:bold; text-align: center; padding-top: 20px;font-size:large;padding-right: 40px;"> Follow Us On Social Media! </h3>
   <!-- Grid row-->
   <div class="row">

     <!-- Grid column -->
     <div class="col-md-12 py-2">
       <div class="mb-5 flex-center">

         <!-- Facebook -->
         <a href="https://www.facebook.com/univteknologimalaysia" class="fb-ic">
           <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
         </a>
         <!-- Twitter -->
         <a href="https://twitter.com/utm_my" class="tw-ic">
           <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
         </a>
         <!--Instagram-->
         <a href="https://www.instagram.com/utmofficial/" class="ins-ic">
           <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
         </a>
       </div>
     </div>
     <!-- Grid column -->
   </div>
   <!-- Grid row-->
 </div>
 <!-- Footer Elements -->
</footer>
<!-- Footer -->

<!-- Footer -->
<footer class="page-footer font-large brown darken-1">

 <!-- Footer Links -->
 <div class="container text-center text-md-left">

   <!-- Grid row -->
   <div class="row">

     <!-- Grid column -->
     <div class="col-md-3 mx-auto">

       <!-- Links -->
       <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

       <ul class="list">
         <li>
           <a href="https://engineering.utm.my/">Faculty of Engineering</a>
         </li>
         <li>
           <a href="https://science.utm.my/">Faculty of Science</a>
         </li>
         <li>
           <a href="https://builtsurvey.utm.my/">Faculty of Built Environment & Surveying</a>
         </li>
         <li>
           <a href="https://business.utm.my/">Azman Hashim International Business School</a>
         </li>
       </ul>

     </div>
     <!-- Grid column -->

     <hr class="clearfix w-100 d-md-none">

     <!-- Grid column -->
     <div class="col-md-3 mx-auto">

       <!-- Links -->
       <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

       <ul class="list">
         <li>
           <a href="https://amd.utm.my/">Academic Management Division</a>
         </li>
         <li>
           <a href="http://alumni.utm.my/">Alumni Relations Unit</a>
         </li>
         <li>
           <a href="http://ebendahari.utm.my/bendahari/">Bursar’s Office</a>
         </li>
         <li>
           <a href="https://digital.utm.my/">UTM Digital</a>
         </li>
       </ul>

     </div>
     <!-- Grid column -->

     <hr class="clearfix w-100 d-md-none">

     <!-- Grid column -->
     <div class="col-md-3 mx-auto">

       <!-- Links -->
       <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

       <ul class="list">
         <li>
           <a href="https://www.utm.my/office-vc/">Office of the Vice-Chancellor</a>
         </li>
         <li>
           <a href="https://www.utm.my/smo/">Office of Strategy Management</a>
         </li>
         <li>
           <a href="https://www.utm.my/international/">UTM International</a>
         </li>
         <li>
           <a href="https://corporateaffairs.utm.my/">Office of Corporate Affairs</a>
         </li>
       </ul>

     </div>
     <!-- Grid column -->

     <hr class="clearfix w-100 d-md-none">

     <!-- Grid column -->
     <div class="col-md-3 mx-auto">

       <!-- Links -->
       <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

       <ul class="list">
         <li>
           <a href="https://registrar.utm.my/security/">Campus Security</a>
         </li>
         <li>
           <a href="https://www.utm.my/oshe/muat-turun/talian-kecemasan/">Emergency Numbers
           </a>
         </li>
         <li>
           <a href="https://www.utm.my/healthcentre/">Health Centre / Clinic</a>
         </li>
     </div>
     <!-- Grid column -->
    
   </div>
   <!-- Grid row -->

 </div>
 <!-- Footer Links -->

 <!-- Copyright -->
 <div class="footer-copyright text-center py-3">© 2020 Copyright:
   <a href="https://utm.my">Universiti Teknology Malaysia</a>
 </div>
 <!-- Copyright -->

</footer>
<!-- Footer -->
  
  </body>
  </html>