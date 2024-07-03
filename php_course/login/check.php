<?php
session_start();

$admins = array('Elfate7', 'Hamza', 'Aly', 'Mohammed', 'Khalid');

if(($_SERVER['REQUEST_METHOD'] == 'POST') && ($_SERVER['SERVER_NAME'] == "localhost"))
{
  $user = $_POST['username'];
  if(in_array($user, $admins)){
    // echo "Admin Found";
    $_SESSION['user'] = $user;
    echo "Welcome " . $_SESSION['user'] . ' You will be Redirected to control panel ares';
    header('REFRESH:5;URL=control.php');
  }else{
    echo "Your are not allowed to view control panel area";
    $_SESSION['user'] = $user;
  }
  // some other checks for security
  if($user){
    echo "test";
  }else{
    echo "Are you edited the the request to bypass the page rules?! <br />";
    echo "you will be punished <br />";
  }
  // ||||||||||||||||||||||||||||||
  // echo $_SESSION['user'];
}else{
  echo "Not Allowed to access page directly";
}
