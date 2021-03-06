<?php
session_start();
error_reporting(1);
include('connection.php');
$utmid=$_SESSION['create_account_logged_in'];
extract($_REQUEST);
if(isset($update))
{
$que="update create_account set name='$name',password='$password' where utmid='$utmid'";
mysqli_query($con,$que);
$msg= "<h3><b>Profile Updated successfully<b></h3><br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UTM Class Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
<?php
  include('menubar.php');
  ?>
<body>

 <?php
     $sql= mysqli_query($con,"select * from create_account where utmid='$utmid' ");
     $result=mysqli_fetch_assoc($sql);
?>
<br>
<div class="container"style="background-color:#1C2331"><!--Primary Id-->
<br>
  <center><h1 style="color:white; padding-left: 200px; padding-right: 200px; padding-top:5px; padding-bottom:5px; border-radius:20px;display:inline-block;font-family: 'Montserrat';display:inline-block;"><strong>User Profile</strong></h1></center><br>
      <center><img src="img/developers/Artboard 5.png" alt="Bird" width="250" height="250px"></center>
      <br>
      <br>
      
  <div class="container text-center">
  <?php  echo $msg; ?>
    <div class="text-center">
    
    <form method="post" enctype="multipart/form-data">
    <table class="table table-borderless sty">
	
	<tr>	
		<th style="color:white">UTM-ID</th>
		<td><input type="text"  name="utmid" value="<?php echo $result['utmid']; ?>"  class="form-control"readonlyg/>
		</td>
	</tr>
	<tr>	
		<th style="color:white">Name</th>
		<td><input type="text"  name="name" value="<?php echo $result['name']; ?>"  class="form-control"/>
		</td>
	</tr>
	<tr>	
		<th style="color:white">Password</th>
		<td><input type="text" name="password" value="<?php echo $result['password']; ?>"  class="form-control"/>
		</td>
	</tr>
	<tr>
		<td colspan="3">
            
            <input style="font-size:20px;"  type="submit" value="Update Profile" name="update" class="btn btn-success"/>
		</td>
	</tr>
</table>
    <br>
    <br>
    <br>
    <!--User Profile Update Query-->
        </form>
      </div>
   </div>
 </div>
</div>
</body>
<br>
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
</html>
