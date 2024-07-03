<?php
// echo file_get_contents('https://github.com/abdula8/locate');
$text = file_get_contents(__DIR__ . '/files/elfate7/elfate7.txt', false, NULL, 5, 7);
file_put_contents('word.txt', $text);

?>
