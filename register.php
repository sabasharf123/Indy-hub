<?php
$host = "localhost";
$db_username = "root";
$db_password = "root";
$db_name = "IndyHub_Users";

$first_name = htmlspecialchars($_POST['first_name']);
$last_name = htmlspecialchars($_POST['last_name']);
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
      // Connected, execute queries
      else {
        $sql = "INSERT INTO `users` (`first_name`, `last_name`, `username`, `password`, `date`) VALUES ('$first_name', '$last_name', '$username', '$password', CURRENT_TIMESTAMP);";

        if ($conn->query($sql)) {
          echo "Thank you for registering! We'll be in touch shortly.";
        }
        else {
          if ($conn->errno == 1062) {
            echo "Sorry, that username is already taken! Please choose another username."; 
          } 
          else {
            echo "Error: " . $sql . "<br>". $conn->error . "<br>". $conn->errno;
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