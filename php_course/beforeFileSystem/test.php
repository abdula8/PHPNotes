<?php
$lessonName = "Concatenation";
  $homePage = "PHP - " . $lessonName;
  $heading = "Welcome To " . $lessonName;
  $brief = "This Lesson Talk About " . $lessonName . " And How To Use Them";
  $languages = "<ul>";
  $languages .= "<li>PHP</li>";
  $languages .= "<li>HTML</li>";
  $languages .= "<li>CSS</li>";
  $languages .= "<li>JS</li>";
  $languages .= "</ul>";

  $sitetheme = "White";
  if($sitetheme == "Main"){
    $css = "main.css";
  } elseif ($sitetheme =="White") {
    // code...
    $css  = "white.css";
  }else {
    $css = "Main.css";
  }
 ?>



<!Doctype html>
<html>
  <head>
    <title><?php echo $homePage; ?></title>
    <link rel="stylesheet" href="<?php echo $css?>"
  </head>
  <body>
    <!-- <h1><?php echo "Test From html"; ?></h1> -->
    <?php echo "
    <h1>Test From html</h1>
    <p> This is paragraph from PHP Output</p>
    ";?>
    <!-- <?php echo "<h1 class=\"testing\">Heading</h1>";?> -->
    <?php echo $heading; ?>
    <?php echo $brief; ?>
    <!-- <?php echo $var . "This is String Concatenation" . $name; ?> -->
    <?php echo $languages;?>
    </ul>
  </body>
</html>
