<?php

$filePath = "C:\\AppServ\\www\\php_course\\fileSystem\\elfate7.txt";

if (file_exists($filePath)){
  echo "File exists";
  file_put_contents($filePath, 'The Scorpion will poison you soooooon!!');
} else{
  echo "File [" . end(explode('\\',$filePath)) . "] not found";
}
# ---------------------------------- ================= ----------------------
if (is_writeable($filePath)){
  echo "File exists";
  file_put_contents($filePath, 'The Scorpion will , is writeable, poison you soooooon!!');
} else{
  echo "File [" . end(explode('\\',$filePath)) . "] not found";
  file_put_contents($filePath, 'The Scorpion will , is writeable, poison you soooooon!!');
}

?>
