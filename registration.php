<?php
include "connection-1.php";

$fullName = trim($_POST["fullName"]);
$email = trim($_POST["email"]);
$password = trim($_POST["password"]);
$address = trim($_POST["address"]);
$job = trim($_POST["job"]);
$nid = trim($_POST["nid"]);
$phone = trim($_POST["phoneNo"]);

$allOkay=0;


if (empty($fullName)){
  $allOkay =1;
  echo "Please add your Name.<br />";
}
if (empty($email)){
  $allOkay =1;
  echo "Please add your Email address.<br />";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $allOkay =1;
  echo "Invalid Email address.<br />";
}

if (empty($password)){
  $allOkay =1;
  echo "Please add your password.<br />";
}

if (empty($address)){
  $allOkay =1;
  echo "Please drop your address here.<br />";
}
if (empty($job)){
  $allOkay =1;
  echo "Please enter your Occupation.<br />";
}
if (empty($nid)){
  $allOkay =1;
  echo "Please add your nid info.<br />";
}


if (empty($phone)){
  $allOkay =1;
  echo "Please add your contact number.<br />";
}

if($allOkay==0){

  $sql = "INSERT INTO registration (fullname, email, 	password, address, job, nid, phoneNo) VALUES
  ('$fullName','$email','$password','$address','$job','$ccard','$phone')";
  if(mysqli_query($conn,$sql)){
    echo "New record created successfully.";
    header('Location: index.php');

  }else {
        echo "Error: ".$sql."<br />".mysqli_error($conn);
  }
}


?>
