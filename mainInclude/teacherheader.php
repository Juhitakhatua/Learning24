<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Student Testimonial Owl Slider CSS -->
    <link rel="stylesheet" type="text/css" href="css/owl.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/testyslider.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <title>Learning24</title>
  </head>
  <body>
     <!-- Start Nagigation -->
    <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top">
      <a href="index.php" class="navbar-brand">Learning24</a>
      <span class="navbar-text">Learn and Implement</span>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myMenu">
        <ul class="navbar-nav pl-5 custom-nav">
          <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
          <li class="nav-item custom-nav-item"><a href="teacher.php" class="nav-link">Teacher</a></li>
          <?php 
              session_start();   
              if (isset($_SESSION['tea_is_login'])){
                echo '<li class="nav-item custom-nav-item"><a href="teacher/teacherProfile.php" class="nav-link">My Profile</a></li> <li class="nav-item custom-nav-item"><a href="Teacher\tealogout.php" class="nav-link">Logout</a></li>';
              } else {
                echo '<li class="nav-item custom-nav-item"><a href="#login" class="nav-link" data-toggle="modal" data-target="#teaLoginModalCenter">Login</a></li> <li class="nav-item custom-nav-item"><a href="#signup" class="nav-link" data-toggle="modal" data-target="#teaRegModalCenter">Signup</a></li>';
              }
          ?> 
          <li class="nav-item custom-nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </nav> <!-- End Navigation -->