<?php

/*
      fopen(filename or URL, mode, include_path, context);
      r: Read only starting from beginning of the file [ file must be exist]
      r+: read write starting from beginning of the file [file must be exist]
      w: write only [ voerwrite the file content] [crae file if not exist]
      w+: write read [open and overwrite ] [create file if not exist]
      a: write only [appen to file does not overwrite] [create file if not exist]
      a+: write read [appen to file does not overwrite] [create file if not exist]
      x: write only  [create a new file ] and [ give error if file exist]
      x+: write read [create a new file ] and [ give error if file exist]

      Hangle line End:

      Unix: \n
      Windows: \r\n
      Mac: \R
*/
$fileHandle = fopen('test.txt', 'r');
$fileHandle = fopen('test.txt', 'r+');
$fileHandle = fopen('test.txt', 'w');  //
$fileHandle = fopen('test.txt', 'w+'); // write  and read - create it if not found

$content = fread($fileHandle, filesize("test.txt"));


$fileName = "elfate7.txt";
$fileHandle = fopen('elfate7.txt', 'r+');
fseek($fileHandle, rand(5, 12), SEEK_SET); //set mouse pointer at position 2
$write = fwrite($fileHandle, 'X');

fseek($fileHandle, 15, SEEK_CUR);  // depends on the current position that the file is open in
$write = fwrite($fileHandle, '9');
fclose($fileName);
include $fileName;


?>
