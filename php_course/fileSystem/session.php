<?php

session_start(); // start oresume session
$_SESSION['username'] = 'Elfate7';
$_SESSION['name'] = 'Hamza';
$_SESSION['favouriteNumber'] = 'Five';

echo '<a href="oage2.php"> ROOM Number 2</a>';

echo "<a href='logout.php'> EXIT</a>";

include 'c.php';
echo "<a href='about.php'> about-us</a>";
echo "<a href='test.php'> test-us</a>";
