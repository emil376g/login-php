<?php
include "connect.php";
setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/");
header("location: index.php");