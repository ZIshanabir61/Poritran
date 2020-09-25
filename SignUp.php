
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet"  href= "SignUp.css"/>
  
    <title>SignUp - Poritran</title>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body data-spy="scroll" data-target="#navbarResponsive">

  <!---Start Home Screen--->
  <div id="home">
    <!---Start Navigation-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" >
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">AboutUs</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="login-1.php">Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="signup">SignUp</a>
          </li>

        </ul>

      </div>
    </nav>

    <!---End Navigation-->

 
    <div id="signup" class="container-fluid bg">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-3">
          <form method="POST" class="form-container" action="registration.php">
              <h3 class="title">Registration Form</h3>
          <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text"  name="fullName" class="form-control" id="fullName">
          </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password"class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
              <label for="fullName">Address</label>
              <input type="text"  name="address" class="form-control" id="address">
            </div>
            <div class="form-group">
              <label for="fullName">NID Card Info</label>
              <input type="text"  name="nid" class="form-control" id="nid">
            </div>
            <div class="form-group">
              <label for="fullName">Occupation</label>
              <input type="text"  name="job" class="form-control" id="job">
            </div>
            <div class="form-group">
              <label for="phoneNo">Contact Number</label>
              <input type="text" name="phoneNo" class="form-control" id="phoneNo">
            </div>



            <button  type="submit" class="btn btn-warning btn-block btnCol">SignUp</button>
          </form>
        </div>

      </div>

    </div>
    </div>
  </body>
  </html>
