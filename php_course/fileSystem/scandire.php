<?php


$link = __DIR__ . "/files";
$files = scandir($link);
echo "<pre>";
print_r($files);
echo "</pre>";

?>
