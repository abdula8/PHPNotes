<?php
session_start();
echo $_SESSION['username'] . "  How asre mmm";
echo "Ypu fav numebr is " . $_SESSION[favouriteNumber];
$_SESSION['favouriteNumber'] = '7';
echo '<a href="apge3.php"> ROOM Number 3</a>';
