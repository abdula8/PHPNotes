<?php

/*

      copy(olfFile, newFile);
      

*/
function copyMe($extension){
  $original = __FILE__;
  return copy($original, $original . "." . $extension);
}


copyMe('bck');


copy('word.txt', 'texter.txt');
if(!copy('word.txt', 'texter.txt')){
  echo "File Not coppied";
}else{
  echo "File has been copied";
}
?>
