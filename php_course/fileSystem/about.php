<?php
session_start();

echo 'Hello ' . $_SESSION['name'] . ' How Are You?';
include 'c.php';
echo "<a href='session.php'> HOME</a>";
