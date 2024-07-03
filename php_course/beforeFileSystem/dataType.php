<?php

//Data type
$var1 = "I Love PHP";
$var2 = 100;
$var3 = TRUE;
$var4 = 10.5;
$var5 = array(
  "A" => "Val1",
  "B" => "Val2",
  "C" => "Val3"
);
$var6 = "Hello PHP";
$var6 = NULL;


class Book{
  function Book(){
    $this->genre = "Adventure";
  }
}

$var7 = new Book();
$var8 = mysqli_connect("localhost", "lib", "PasSw0rD", "mydb");
$var  = fopen('test.txt', 'r') // resource data type


echo "<h2>Get Type</h2>" . "<br/>";
echo gettype($var1) . "<br/>";
echo "<h2>Variable Types</h2>"; echo "<br/>";
var_dump($var1); echo "<br/>";
var_dump($var2); echo "<br/>";
var_dump($var3); echo "<br/>";
var_dump($var4); echo "<br/>";
var_dump($var5); echo "<br/>";
var_dump($var6); echo "<br/>";
var_dump($var7); echo "<br/>";
var_dump($var8); echo "<br/>";

if (100 < 200){
  echo "GOOF";
}


?>
