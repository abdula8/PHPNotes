<?php
// [@] Error control operator ==> ignore error
// $file = @fopen("s.css", 'r') or die("This file is not found");
// (@include("test.php")) or die ("TEST not found");
$server  ="localhost";
$user = "elfate7";
$pass = "P@ssW0rD";
$db = "mysql";

@mysqli_connect($server, $user, $pass, $db) or die("There is somethings no connection");

?>
