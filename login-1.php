<?php
include "connection-1.php";

$email = trim($_POST["email"]);
$password = trim($_POST["password"]);
$allOkay =0;

if (empty($email)){
  $allOkay =1;
  echo "Please add your Email address.<br />";
}

if (empty($password)){
  $allOkay =1;
  echo "Please add your password.<br />";
}

if($allOkay==0){
  $sql = "SELECT * from registration where email= '$email' ";
  $query = mysqli_query($conn,$sql);
  $numrows = mysqli_num_rows($query);
  if ($numrows!=0){
    while ($row = mysqli_fetch_assoc($query)){
    $dbemail = $row['email'];
    $dbpassword = $row['password'];
      $dbRole = $row['role'];
    if($dbpassword==$password){

      session_start();
      $_SESSION['email']=$email;
      if($dbRole=="Employer"){
        $_SESSION['role']="Employer";
          header('Location: http://internshipit.rf.gd/employer/');
      }

      if($dbRole=="Admin"){
        $_SESSION['role']="Admin";
        header('Location: http://internshipit.rf.gd/Admin.html');
      }
      if($dbRole=="Intern"){
        $_SESSION['role']="Intern";
        header('Location: http://internshipit.rf.gd/intern/');
      }
    }else{

      echo "<script>alart('username or password id incorrect!')</script>";
      echo "<script>location.href='http://internshipit.rf.gd/Login.php'</script>";
    }
  }
}else{
  echo "<script>location.href='http://internshipit.rf.gd/Login.php'</script>";
  echo "<script>alart('username or password id incorrect!');</script>";


}
}


 ?>
