<?php


$filePath = "C:\\AppServ\\www\\php_course\\fileSystem\\elfate7.txt";

$dir_name = dirname(__FILE__);
include $dir_name . "../beforeFileSystem/info.php";
// echo __DIR__ . "<br />";
$dir_name2 = dirname($filePath);
echo $dir_name2 . "<br />";
$base_name = basename(__FILE__, '.php');
echo $base_name . "<br />";
if ($base_name === 'dirs'){
  echo $base_name . "<br />";
}


$name = "Elfate7";
if(is_dir($name)){
  rmdir($name);
  echo "The directory" . $name . "is deleted";
} else{
  echo "There is no directory named " . $name;
}

?>
