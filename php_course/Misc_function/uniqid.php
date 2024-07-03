<?php
/*
      uniqid(Prefix, More_Entropy);

      uniq Identifier
*/

$random = uniqid('Strip1_',true);
echo $random . "<br>";
var_dump($random);
