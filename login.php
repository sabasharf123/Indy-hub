<?php

$host = "localhost";
$db_username = "root";
$db_password = "root";
$db_name = "IndyHub_Users";

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

  if (!empty($username)){
    if (!empty($password)){
      // Create connection
      $conn = new mysqli($host, $db_username, $db_password, $db_name);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      else {
        // Connected, execute queries
        $sql = "SELECT username FROM `users` WHERE username='$username'";
        $result = $conn->query($sql);
        if($result->num_rows == 0) {
          echo "That username is not registered!";
        }
        else {
            $sql = "SELECT username FROM `users` WHERE username='$username' AND password='$password'";
            $result = $conn->query($sql);
            if($result->num_rows == 0) {
              echo "That password is incorrect!";
            }
            else {
              echo "Login successful, welcome to IndyHub!";
              header("Location: index.html");
            }
        }
        $conn->close();
      }
    }
    else {
      echo "Password cannot be empty";
      die();
    }
  }
  else {
    echo "Username cannot be empty";
    die();
  }
?>
