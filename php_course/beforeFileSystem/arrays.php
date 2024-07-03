<?php

/*
 Index Arrays
 Associated Array  ==>
 syntax:
 array (
 key1 => value,
 key2 => value25,
 key3 => value3,
 key4 => value2,
 )
*/
// foreach($workers)
$workers1 = array("FADE", "fads", array("FADE", "fads", array("FADE", "fads", array("FADE", "fads", "raed"))));
$workers2 = array("FADE", 15, "raed", 20, "fads", array("PHP", "TEST","FDSFSD"));
$workers = array("zFADE", 15, "raed", 20, "fads", "PHP", "TEST","FDSFSD");

$workers[] = "NEW item in array"; // array append value
echo "<pre>";
print_r($workers);
echo "</pre>";

/*
in_array(Needle, Haystack, Type)
*/
if(in_array("FADE", $workers, true)){
  echo "Found";
}
$worker = array_search(20,$workers,true); // get index
echo "Index = " . $worker;
// array_key_exists(Needle, Haystack)

// add element to array
// Array_Push: array_push(Array,value1, value2,vlaue3,...)
array_push($workers, "Python", "MySQL", "Ajaz");
array_unshift($workers, "Python", "MySQL", "Ajaz");

array_pop($workers); //remove last element of the array
array_shift($workers); //remove first element of the array

//sort and reverse sort treats with indexed array only
sort($workers, SORT_STRING);
rsort($workers, SORT_STRING);
$workers1 = array(
  "zaod" => 312,
  "fasd" => 3,
  "asdfds" => 33,
  "gdf" => 4,
  "awe" => 12,
  "fds" => 87,
  "sdf" => 99,
);
asort($workers1);
arsort($workers1);

echo "<pre>";
print_r($workers1);
echo "</pre>";

ksort($workers1);
krsort($workers1);

echo "<pre>";
print_r($workers);
echo "</pre>";

echo "<pre>";
print_r($workers1);
echo "</pre>";

echo $workers1[5][1];
$name = array_fill(1, 10, array_fill(1, 10, "value"));

array_fill(1, 10, "value");
echo "<pre>";
print_r($name);
echo "</pre>";
echo array_rand($name , 3)[0] . "<br>";
echo array_rand($name , 3)[1] . "<br>";
echo array_rand($name , 3)[2] . "<br>";
?>
