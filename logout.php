<?php
session_start();
if(isset($_SESSION['role'])){
    session_destroy();
    echo "<script>location.href='http://internshipit.rf.gd/Login.php'</script>";
   echo "Your test function on button click is working";
}else {
    echo "<script>location.href='http://internshipit.rf.gd/Login.php'</script>";
}



 ?>
