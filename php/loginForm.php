<?php
include "connect.php";
$username = "";
$hashed_password = "";
try{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
 $hashed_password = md5($password);
    
    $stmt = $conn->prepare("SELECT * FROM members where username='$username' AND password = '$hashed_password'"); 
    $stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!empty($result)){
        $cookie_value = true;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/" );
        header("location: ./index.php");
        } else{
            echo "thats not a valid login";
    }
  }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}



?>