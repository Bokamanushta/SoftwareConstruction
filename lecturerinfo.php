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
<?php
session_start();
$utmid=$_SESSION['create_account_logged_in'];
error_reporting(1);
?>

<style>
.sidenav {
  height: 100%;
  width: 0%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #1C2331;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>

<!--Navbar -->
<nav style="background-color: #54002a !important;" class="navbar navbar-expand-lg navbar-dark default-color">
<span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()">&#9776;</span>
    <div class="container">
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h2 style="color:white;font-size:35px;padding-left:20px;padding-bottom:20px;">Menu</h2>
  <a href="classvenue.php">Class Venue</a>
  <a href="classschedular.php">Class Schedular</a>
  <a href="lecturerinfo.php">Lecturer Information</a>
</div>

    <a class="navbar-brand" href="dashboard.php">
        <img src="img/UTM.png" height="65" class="d-inline-block align-top"
          alt="utm logo">
      </a>
    &nbsp;<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Services
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="https://my.utm.my">My UTM Portal</a>
            <a class="dropdown-item" href="https://elearning.utm.my">Elearning</a>
            <a class="dropdown-item" href="#">Aims Web</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"> User</i>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default"
            aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="profile.php">View Profile</a>
            <a class="dropdown-item" href="logout.php">Log out</a>
          </div>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  <!--/.Navbar -->
  <!-- Footer -->
<footer class="page-footer font-small unique-color-dark py-2">
    <!-- Footer Elements -->
    <div class="container">
    
      <div class="row">
        <div class="col-md-6 d-flex justify-content-start">

          <div class="footer-copyright text-center bg-transparent">
            &ensp;&ensp;<a href="https://kl.utm.my/">UTM Kuala Lampur </a>&ensp;
            <a href="https://pagoh.utm.my/"> UTM Pagoh</a>&ensp;
            <a href="contact.php"> Contact</a>
          </div>
          
        </div>
        <div class="col-md-6 d-flex justify-content-end">
      <ul class="list-unstyled d-flex mb-0">
        <li>
          <a href="https://fb.com/khp53" class="mr-3" role="button"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="https://twitter.com/utm_my" class="mr-3" role="button"><i class="fab fa-twitter"></i></a>
        </li>
        <li>
          <a href="https://instagram.com/khp53" class="mr-3" role="button"><i class="fab fa-instagram"></i></a>
        </li>
        <li>
          <a href="https://youtube.com/canyouKHP" class="mr-3" role="button"><i class="fab fa-youtube"></i></a>
        </li>
      </ul>
    </div>
      </div>
    
    </div>
    <!-- Footer Elements -->
    </footer>
    <!-- Footer -->





  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">
 function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

    

    <footer class="page-footer font-small grey lighten-4 py-3">
        <div class="container">
        
          <div class="row">
            <div class="col-md-6 d-flex justify-content-start">
    
              <div class="footer-copyright text-center bg-transparent">
                &ensp;&ensp;<a href="dashboard.php" style="color:black"><b>/ Home</b></a>&ensp;
                <a href="#" style="color:black"><b>/ Lecturer Information</b></a>&ensp;
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

    <?php
   $sql= mysqli_query($con,"select * from create_account where utmid='$utmid' ");
   $result=mysqli_fetch_assoc($sql);
   ?>
    <a style="color: inherit;" href="lecturerinfo1.php">
    <div class="container my-5 pt-3 pb-3 pl-5 z-depth-1">
        <h2><b><?php echo $result['course1']; ?></b></h2>
        <h4><b>Lecturer: </b><?php echo $result['lecturer1']; ?></h4>
        <h4><b>Section: </b><?php echo $result['section1']; ?></h4>
    </div>
    </a>
    <a style="color: inherit;" href="lecturerinfo2.php">
    <div class="container my-5 pt-3 pb-3 pl-5 z-depth-1">
        <h2><b><?php echo $result['course2']; ?></b></h2>
        <h4><b>Lecturer: </b><?php echo $result['lecturer2']; ?></h4>
        <h4><b>Section: </b><?php echo $result['section2']; ?></h4>
    </div>
    </a>
    <a style="color: inherit;" href="lecturerinfo3.php">
    <div class="container my-5 pt-3 pb-3 pl-5 z-depth-1">
        <h2><b><?php echo $result['course3']; ?></b></h2>
        <h4><b>Lecturer: </b><?php echo $result['lecturer3']; ?></h4>
        <h4><b>Section: </b><?php echo $result['section3']; ?></h4>
    </div>
    </a>
    <a style="color: inherit;" href="lecturerinfo4.php">
    <div class="container my-5 pt-3 pb-3 pl-5 z-depth-1">
        <h2><b><?php echo $result['course4']; ?></b></h2>
        <h4><b>Lecturer: </b><?php echo $result['lecturer4']; ?></h4>
        <h4><b>Section: </b><?php echo $result['section4']; ?></h4>
    </div>
    </a>
    <a style="color: inherit;" href="lecturerinfo5.php">
    <div class="container my-5 pt-3 pb-3 pl-5 z-depth-1">
        <h2><b><?php echo $result['course5']; ?></b></h2>
        <h4><b>Lecturer: </b><?php echo $result['lecturer5']; ?></h4>
        <h4><b>Section: </b><?php echo $result['section5']; ?></h4>
    </div>
    </a>
    <a style="color: inherit;" href="lecturerinfo6.php">
    <div class="container my-5 pt-3 pb-3 pl-5 z-depth-1">
        <h2><b><?php echo $result['course6']; ?></b></h2>
        <h4><b>Lecturer: </b><?php echo $result['lecturer6']; ?></h4>
        <h4><b>Section: </b><?php echo $result['section6']; ?></h4>
    </div>
    </a>

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
           <a href="http://ebendahari.utm.my/bendahari/">Bursar???s Office</a>
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
 <div class="footer-copyright text-center py-3">?? 2020 Copyright:
   <a href="https://utm.my">Universiti Teknology Malaysia</a>
 </div>
 <!-- Copyright -->

</footer>
<!-- Footer -->
  
  </body>
  </html>
  

        