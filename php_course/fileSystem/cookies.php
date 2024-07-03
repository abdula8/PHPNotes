<?php
/*
     cookies identify users
    setcookie(name, value, expire, path, domain, secure, httponly)
    name: Name of the cookie
    Value: Content of the cookie
    Expire: Expiration Date
    Path: Set cookie for the path and all child files
    Domain: set cookie for your sub.domain
    Secure: true, false ==> https,, http
    HTTP only: true: prevent scripting languages to access cookie

*/

/*
setcookie("school", "channle", time() + 3600, "/", "localhost");
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
setcookie("Elfate7", "Test", time() + 3600, "/");
if (count($_COOKIE) > 0){
  echo "Good the cookies are enabels for this website";
}else{
  echo "Sorry the cookies are not enabled, please enable it for best browsing";
}
*/


$mainColor = '#FFF'; //Main Color for page
if ($_SERVER['REQUEST_METHOD'] == 'POST' ){

  $mainColor = $_POST['color']; // Get from the form

  setcookie('Background', $mainColor, time() + 3600, '/');

}

if (isset($_COOKIE['Background'])){
  $body = $_COOKIE['Background'];
}else{
  $body = $mainColor;
}

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Modify Cookie</title>
  </head>
  <body style="background-color: <?php echo $body; ?>">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="color" name="color">
        <input type="submit" value="Choose">
        <!-- <input type="submit" name="login"> -->
      </form>
  </body>
</html>
