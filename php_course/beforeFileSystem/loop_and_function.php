<?php


/*
for($i = 0; $i <= 20; $i++){
  echo $i . "<br>";
}
*/
function tryLoops($var){
if($var == "v"){
  // foreach loop that treats with array
  $countries = array("EG", "KSA", "QTR", "BR", "USA", "UAE");

  foreach ($countries as $value){
    echo $value . "<br>";
  }
}elseif ($var == "kv"){
  $countries = array(
    "EG" => "Egypt",
    "KSA" => "Saudi Arabia",
    "QTR" => "Qatar",
    "BR" => "British",
    "USA" => "United States of America",
    "UAE" => "United Arab Emarates",
  );

  foreach ($countries as $key => $value){
    echo $key . " => " . $value . "<br>";
  }
}elseif($var == "forLoop"){

  $langs = array("HTML", "CSS",  "JS", "Ajax", "Python", "Ruby");
  echo count($langs);
  echo "<ul>";
  for($i = 0; $i < count($langs); $i++){
    echo "<li>" . $langs[$i] . "</li>";
  }
  echo "</ul>";
}elseif($var == "forLoop_2"){

   // Initial Expression [ initial Condition ]
  for($i = 0; ; $i++){
    echo $i . "-";
    if ($i>20){ // Second Expression [ Condition ]
      break;
    }
     // Third Expresion [Increment]
  }
  echo "<br>";
}elseif($var == "whileLoop"){
  $i = 1;
  while ( $i <= 50 ):
    echo $i . "-";
    $i++;
  endwhile;
  echo "<br>";
}elseif($var == "do_while"){
  // do while loop
  $ii = 1;
  do{
    echo $ii++ . "<->";
  }while ($ii <= 20);

  echo "<br>";
}
}
function trySelect($selector, $name){
  echo "<select name='$name'>";
  if (gettype($selector) == "integer"){
  for($year = 1900; $year <= $selector; $year++){
    echo "<option value='$name'>" . $year . "</option>";
  }
}elseif(gettype($selector) == "array"){
  foreach($selector as $value){
    echo "<option value='$name'>" . $value . "</option>";
  }
}else{
  return "Hello, El-Fate7";
}
echo "</select>";

}

function calculate ($age){
  return $age * 365;
}

// trySelect(array("d","d"), "fad");
// tryLoops("v");
// tryLoops("vw");
// tryLoops("do_while");

echo "<br>" . rand(26, 2520) . "<br>";

function getRandNum($num){
  return rand(1, $num);
}

function makeFrame($element){
  $frame = "<div class='nice-frame'>";
  $frame .= $element;
  $frame .= "</div>";

  return $frame;
}

$myElement = makeFrame(getRandNum(200));

?>
<!Doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> Advanced Function</title>
  <style>
  .nice-frame{
    padding:10px;
    text-align:center;
    width:400px;
    margin:20px auto;
    border-radius:10px;
    background-color:#EEE;
    border:1px solid #CCC;
    font-family:Tahoma, Arial;
  }
  .nice-frame span{
    font-weight:bold;
    color:#F00;
  }
  </style>
</head>
<body>
  <?php echo $myElement;?>
</body>
</html>

<select name="year">

<?php
for($year = 1900; $year <= 2015; $year++){
  echo "<option value='$year'>" . $year . "</option>";
}

$countries = array("EG", "KSA", "QTR", "BR", "USA", "UAE");

foreach ($countries as $value){
echo $value . "<br>";
"<option value='$value'>" . $year . "</option>";
}
?>
 <!-- # // ====================================================== -->
</select>
<select name="country">

<?php
$countries = array("EG", "KSA", "QTR", "BR", "USA", "UAE");
foreach ($countries as $value){
  echo "<option value='$country'>" . $value . "</option>";
}

?>

</select>
