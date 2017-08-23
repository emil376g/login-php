<?php
try{
include "connect.php";
$username = $email = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  if ($_POST["password"] == $_POST["replay-password"]){
      $password = test_input($_POST["password"]);
     $hashed_password = md5($password);
      
      if($username == "" || $email == "" || $password == ""){
          echo "you have to put something in the boxes";
      }
      else{
$sql = "insert into members (username, password, email) values ('$username', '$hashed_password', '$email')"; 
      $conn->exec($sql);
header("location: index.php");
        setcookie($cookie_name, $cookie_value);
  }
      }else{
          echo "you password is not equal";
      }
  }
    
    }
catch (PDOException $e){
    print("you email is allready in use");
}
catch (Exception $e){
    print $e;
    die();
}
?>