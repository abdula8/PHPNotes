<?php
/*
    sleep(seconds);
    usleep(<icroseconds);
    time_sleep_untill(time()+5);
*/
function checkFile(){
  if(file_exists('elfate7.txt')){
    echo 'Good Fi001le is found.';
  }else{
    time_sleep_until(time() +  5);
    checkFile();
  }
}

echo checkFile();
// $name = "Elfate7";
// echo $name . "<br>";
// sleep(5);
// usleep(2500000);
// echo "Dorry FSDFSDFSDF";
