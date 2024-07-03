<?php

/*
      Global Scope

*/
$name = "Elfate7";

function test(){
  echo $GLOBALS['name'];
}

test();

/*
    $_SERVER

*/

echo '<br />' . $_SERVER['SERVER_ADDR'] . '<br />';
echo $_SERVER['SERVER_NAME'] . '<br />';
echo $_SERVER['QUERY_STRING'] . '<br />';// when requestcomes from query
echo $_SERVER['HTTP_REFERER'] . '<br />';
echo $_SERVER['SERVER_PORT'] . '<br />';
echo $_SERVER['DOCUMENT_ROOT'] . '<br />';



$referer = explode('/', $_SERVER['HTTP_REFERER']);
echo "<pre>";
print_r($referer);
echo "</pre>";


if(($_SERVER['REQUEST_METHOD'] == 'POST') || in_array("localhost", $referer)){

  $username = $_GET['username'];
  $username2 = $_POST['email'];
  // $username = $_GET['username'];
  echo "You sent data with " . $_SERVER[REQUEST_METHOD] . '<br />';
  $admins = array('elfate7', 'root@gmail.com', "admin@gmail.com");

if (in_array($username2, $admins)){
  echo "Welcome " . "<b>" . $username2 . "</b>" . " To Control Panel For Admin <br />";
} else{
  echo "You are an attacker don't come here again ....<br />";
}
}else{
  echo 'Sorry You Can not Browse This Page Directly' . $_POST['email'] . '<br />';
}

echo $_GET['username'] . '<br />';
echo $_GET['password'] . '<br />';
// echo $_SERVER['DOCUMENT_ROOT'] . '<br />';
/*
      REQUEST METHOD


*/


echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "=================================";
echo "=================================";
echo "=================================";
echo "=================================";










?>

<a href="<?php echo $_SERVER['PHP_SELF'];?>">click</a>
