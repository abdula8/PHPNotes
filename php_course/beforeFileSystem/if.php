<?php
$num1 = 512;
$num2 = 516;

if($num1 > $num2 && $num1 < 1024){
  echo "YES " . $num1 . " IS LARGER Than " . $num2;
}
elseif ($num1 == $num2) {
  echo "YES " . $num1 . " IS Equal " . $num2;
}
else {
  echo "YES " . $num1**2 . " IS Smaller Than " . $num2;
}

?>
