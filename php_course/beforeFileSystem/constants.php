<?php
// syntax: define(Name, Value, Case-Insensitive);

const SITE_NAME = "Elfate7.com";

define("SITE_STATUS", false);
if(SITE_STATUS){

$firstName = "Elfate7" . "<br/>";
echo $firstName;
define("FIRST_NAME", "Elfate7", false); // false means you must write it as  FIRST_NAME
// true means you can write FIRST_NAME or use case insensitive FIrst_namE
echo FIRST_NAME; //Constant

define("LAST_NAME", "Mohammed", true);
echo last_NAME . "<br>";

echo PHP_INT_MAX . "<br>";
echo __FILE__;
echo __LINE__;
} else{
  echo "Site Under Maintenance" . "<br>";
  echo SITE_NAME;
}
?>
