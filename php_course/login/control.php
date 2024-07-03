<?php
session_start();
$admins = array('Elfate7', 'Hamza', 'Aly', 'Mohammed', 'Khalid');
$user = $_SESSION['user'];
if(in_array($user, $admins)){
  echo "Welcome user " . $_SESSION['user'] . " You are admin";
  echo "<pre>";
  echo print_r($_SESSION);
  echo "</pre>";
}else{
  echo "You are not permitted to see this page";

  // session_start();
  //
  // session_unset();
  //
  // session_destroy();
}
