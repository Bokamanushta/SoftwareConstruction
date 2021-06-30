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
  
  <style>
    select {
        min-width:220px;
        width: 250px;
    }
    select:focus {
        min-width: 250px;
        width: auto;
    }

    .break{
        background-color: gray;
    }

    .design{
        background-color: #6b97ff;
        text-align: center;
    }

    .col1{
        background-color: #99b3ff;
        
    }
  </style>
</head>
<body>
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
    <?php
       $sql= mysqli_query($con,"select * from create_account where utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>

    <footer class="page-footer font-small grey lighten-4 py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-6 d-flex justify-content-start">
    
              <div class="footer-copyright text-center bg-transparent">
                &ensp;&ensp;<a href="dashboard.php" style="color:black"><b>/ Home</b></a>&ensp;
                <a href="#" style="color:black"><b>/ Class Schedular</b></a>&ensp;
              </div>
            </div>
          </div>
        </div>
        </footer>
        <br>
        <br>
        <div class="container">
        <h1>Class Schedular</h2>
        <hr>
        <br>
        <h4><b>Student Name: </b><?php echo $result['name']; ?></h4>
        <h4><b>UTMID: </b><?php echo $result['utmid']; ?></h4>
        <table>
          <tr>
              <td>
                <h4><b>Email: </b>example@graduate.utm.my&ensp;</h4>
            </td>
            <td>
                <h4><b>&ensp;Semester: </b>5/8</h4>
            </td>
          </tr>
        </table>
    </div>
    <br>
    <div class="container" id="printableArea">
    <table class="table table-bordered table-hover">
    <thead class="design">
        <tr>
        <th style="font-size: 18px; font-weight: bold;" scope="col">Date</th>
        <th style="font-size: 18px; font-weight: bold;" scope="col">Sun</th>
        <th style="font-size: 18px; font-weight: bold;" scope="col">Mon</th>
        <th style="font-size: 18px; font-weight: bold;" scope="col">Tue</th>
        <th style="font-size: 18px; font-weight: bold;" scope="col">Wed</th>
        <th style="font-size: 18px; font-weight: bold;" scope="col">Thu</th>
        <th style="font-size: 18px; font-weight: bold;" scope="col">Time</th>
        </tr>
    </thead>
    <tbody>
    <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='2' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">8.00 - 8.50</th>
        <td>
        <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>2</td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='3' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">9.00 - 9.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>3</td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='4' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">10.00 - 10.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>4</td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='5' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">11.00 - 11.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>5</td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='6' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">12.00 - 12.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>6</td>
        </tr>
        
        <tr class="break">
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='8' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">02.00 - 02.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>8</td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='9' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">03.00 - 03.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>9</td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='10' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">04.00 - 04.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>10</td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='11' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">05.00 - 05.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>11</td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='12' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">06.00 - 06.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>12</td>
        </tr>
    </tbody>
    </table>
</div>
  <div class="container">
  <input class="btn btn-primary" type="button" onclick="printDiv('printableArea')" value="Print Schedule" />
  </div>
  <script>
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
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
</html>