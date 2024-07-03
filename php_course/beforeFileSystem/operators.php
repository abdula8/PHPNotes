<?php

// Concatenate number with String
$currency = 100;

$currency *= 3.75;
$currency .= " RS";
echo $currency . "<br>";

/*
   Coparizon Operator
   [==] Equals
   [===] Identical => data type and value

*/
$r = 100;
$rr = "100";
if ($r == $rr xor 1 == 0){ // it is better to use && not and

  echo "Identical";
}
else{
  echo "Not";
}
?>
