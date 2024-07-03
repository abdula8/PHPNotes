<?php

file_put_contents('TEST.txt', 'This created by me', FILE_APPEND | LOCK_EX);
include "TEST.txt";
?>
