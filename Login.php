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
  <link rel="stylesheet"  href= "Login.css"/>
  <title>Login - InternshipIT</title>
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
            <a class="nav-link" href="index.php#home">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php#aboutUs">AboutUs</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php#features">Features</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php#contact">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#login">Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="SignUp.php">SignUp</a>
          </li>

        </ul>

      </div>
    </nav>

    <!---End Navigation-->


    <div id="login" class="container-fluid bg">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-3">
          <form method="POST" class="form-container" action="login.php">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input id="email" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input id="password" name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button id="Login" type="submit" class="btnCol btn btn-warning btn-block ">Login</button>
          </form>
        </div>

      </div>

    </div>
    </div>
  </body>
  </html>
<?php

if(isset($_COOKIE['email']) && isset($_COOKIE['pass']) ){
  $email = $_COOKIE['email'];
  $pass= $_COOKIE['pass'];
  echo "<script>
document.getElementById('email').value='$email';
document.getElementById('password').value='$pass';
  </script>";

}

 ?>
