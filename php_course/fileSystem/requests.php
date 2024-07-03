<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required><br><br>
  <input type="submit" value="Submit">
</form>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  echo $_REQUEST['email'];
}


?>
