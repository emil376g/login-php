<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "login";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$cookieCounter = count($_COOKIE);
$cookie_name = "login";
$cookie_value = $cookieCounter;
}
catch(PDOException $e)
{
    print "error!:" . $e->getMessage() . "<br/>";
    die();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$GLOBALS['z'] = false;
?>