<?php
/*
Explode: explode(separator, string, limit)
*/
$str = "Helo Oiou  hhnm love PHP";
echo $str . "<br>";
$str = explode(" ", $str, -3);
echo "<pre>";
print_r($str);
echo "</pre>";
$str = "Helo, Oiou,  hhnm, love, PHP";
$str = explode(", ", $str);
echo "<pre>";
print_r($str);
echo "</pre>";

$str = "widget,clock,header,footer";
$arr = explode(",", $str);
for($i=0; $i < count($arr); $i++){
  echo "<link rel='stylesheet' href='css/" . $arr[$i] . ".css'>";
  echo "<span class='tag'>" . $arr[$i] . "</span>";

}

// implode(separator, array)
$arr = array("Ahmed", "Mahmoud", "Abdallah");
$r = implode("$", $arr);
$RR = join("$", $arr);
echo "FFFFFFFFFFFFFFFFFFFFFFF" . $r;
echo "<br>" . $RR . "<br>";


//chunk_split(string,length[default value76], end[default value \r\n])
$ed = chunk_split($RR,2, "#");
echo "000000000" . $ed;

$dad = "I love php to much because javas script fksldjphpfskldfs asosaopsphpdkasldas adkmasphpdlkphpmao[h[phpsdlkasjm";
echo $dad . "<br>";
$dad = explode(" ", $dad);
echo "<pre>";
print_r($dad);
echo "</pre>";
$dad = str_replace("php", "--JS--", $dad, $i);
echo "<pre>";
print_r($dad);
echo "</pre>";
// $dad = str_replace(array("-", "f", "kmas"), " ", $dad);
$dad = str_replace(array("-", "f", "kmas"), array(">", " ", ";;;"), $dad);
// $dad = implode(" ", $dad);
echo "<pre>";
print_r($dad);
echo "</pre>";
// echo "Replacement count is: " . $i . " " . $dad;

/*
str_Repeat: str_repeat(string[requierd], repeat[required])
Str_Shuffle: str_shuffle(str)
Strlen: strlen(string)
*/


# -------------------------------------------------------------
/*

addslashes: addslashes(string)
stripslashes($skipped);
strip_tags($str, allow);
*/

$str = "I will go at  7 o'clock";
echo $str . "<br />";
$skipped = addslashes($str);
echo $skipped . "<br>";
$clean = stripslashes($skipped);
echo $clean . "<br>";

$str = "I love <span>PHP</span> Go To<a href='php.net'>PHP.net<a/> To Learn";
echo $str . "<br>";
$stripped = strip_tags($str);
echo $stripped . "<br>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "======================================================";
echo "<br>";

$str = "I love you!";
$lower = strtolower($str);
$upper = strtoupper($str);
$first = ucfirst($str);
$first = lcfirst($upper);
$firstOfAll = ucwords($str);
echo $str .  "<br>" . $first .  "<br>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "======================================================";
echo "<br>";
/*
Trim:  trim(string, charlist)
default trim values
\0      NULL
\t      tab
\n      new line
\r      carriage return
\x0B    vertical tab
" "     space

*/

$str = "I love you!";
echo var_dump($str) . "<br/>";
$str = "\x0B \x0B \x0B I Love       PHP! \x0B \x0B \x0B";
echo var_dump($str) . "<br/>";
$trimmmed = trim($str, "I L\x0B"); // removes from right and left the default values
echo var_dump($trimmmed) . "<br/>";


$str2 = "I love you ! mafd";
$count = str_word_count($str2);
echo  $count . "<br/>";

$count = str_word_count($str2, 1);
echo "<pre>";
print_r($count);
echo "</pre>";

$count = str_word_count($str2, 2, '!');
echo "<pre>";
print_r($count);
echo "</pre>";


echo "<br>";
echo "======================================================";
echo "<br>";

$str = "I love PHP so much PHP becff PHP is formm";
$pos = strpos($str, "PHP", 9);
echo $pos;
echo "<br>";
$pos = stripos($str, "php", 9);
echo $pos. "<br>";

$char = strstr($str, "PHP");
echo $char . "<br>";

$username = "atef.66.ae@gmail.com";
$char = strstr($username, '@', true);
echo $char . "<br />";
echo str_replace("@","",$username) . "<br />";
$sd = substr($username, -9, -3);
echo $sd . "<br />";



?>
