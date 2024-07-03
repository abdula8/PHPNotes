<?php

/*
      [1] Check  if the dir is exists
      [2] Make the dir
      [3] Assign this dir top var
      [4] Create A File inside this dir
      [5] Assign this file to var
      [6] Change mode of this file to be read only
      [7] Check if this file i writable
      [8] Change mode of this file and make it writable
      [9] include this file

*/

if (file_exists(__DIR__ . '/files/elfate7')){
  echo "Found";
}else{
  mkdir(__DIR__ . '/files/elfate7');
}

$directory = __DIR__ . '/files/elfate7/';
file_put_contents($directory . 'elfate7.txt', 'I am still here You cannot do anything');

$file = $directory . 'elfate7.txt';
// echo $file;
chmod($file, 0444);
if (is_writeable($file)){
  file_put_contents($file, "HHHH I did it again");
} else{
  chmod($file, 0666); // 0755 - rwx - r_x - r_x
  file_put_contents($file, "The scorpion HHHhhhHHH");
}
include $file;
?>
