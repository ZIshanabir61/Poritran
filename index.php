<?php
session_start();
if(isset($_SESSION['role'])){
  if($_SESSION['role']=="Employer"){
      header('Location: http://internshipit.rf.gd/employer/');
  }
  if($_SESSION['role']=="Admin"){
        header('Location: http://internshipit.rf.gd/Admin.html');
  }
  if($_SESSION['role']=="Intern"){
        header('Location: http://internshipit.rf.gd/intern/');
  }
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet"  href= "indexStyle.css"/>
  <title>Home - InternshipIT</title>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body data-spy="scroll" data-target="#navbarResponsive">

  <!---Start Home Screen--->
  <div id="home">
    <!---Start Navigation-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" >
      <a class="navbar-brand" href="#"><img src="images/logo.png" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#aboutUs">AboutUs</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#features">Features</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Login.php">Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="SignUp.php">SignUp</a>
          </li>

        </ul>

      </div>
    </nav>

    <!---End Navigation-->

    <!---Start Landing Page Section-->
    <div class="landing">
      <div class="home-wrap">
        <div class="home-inner">

        </div>
      </div>
    </div>

    <div class="caption">
      <h1>Find The Internship That Fits Your Life.</h1>
      <a class="btn btn-danger btn-lg" href="SignUp.php">LETS GET STARTED</a>
    </div>

    <!---End Landing Page Section-->

  </div>
  <!---End Home Screen--->

  <!---Start AboutUs--->
  <div id="aboutUs" class="offset">
    <div class="container-fluid padding aboutUs">
      <div class=" row welcome text-center ">
        <div class="col-12">
          <h1 class="display-7 aboutusHeader">About us</h1>
        </div>
        <div class="heading-underline"></div>
        <div class="col-12">
          <p class="lead aboutusText">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!---End AboutUs--->

  <!---Start features--->
  <div id="features" class="offset">

    <div class="container-fluid padding features">
      <div class="row padding">
        <div class="col-lg-6">
          <img class="img-fluid" src="images/feature.png" alt="Post Job">
        </div>

        <div class="col-lg-6 featureText">
          <h5>Employers: Looking to Post a Job? </h5>
          <p class="featureP">We get it – hiring the right talent can be tough. Our Employer Solutions are here to help simplify the process, speed up time-to-hire, and make life a lot less stressful.</p>
          <br />
          <a href="SignUp.php" class="btn btn-danger btn-lg">POST A JOB FOR FREE</a>
        </div>
      </div>

    </div>

  </div>
  <!---End features--->


  <!---Start Contact--->
  <div id="contact" class="offset">
    <footer>
      <div class="row padding">
        <div class="col-md-3">
          <img src="images/logo.png" />
        </div>

        <div class="col-md-6 contact">
          <strong>Contact Us</strong>
          <p>
            Office Address<br />HelpLine no: +88016XXXXXX <br />EmailAddress: helpline@yenternship.com
          </p>
        </div>

      </div>
    </footer>
  </div>

  <!---End Contact--->

</body>
</html>
