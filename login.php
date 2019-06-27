<?php
session_start();

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
        else { //users is a table from sql database
            $sql = "SELECT first_name, last_name, username, email FROM `users` WHERE username='$username' AND password='$password'";
            $result = $conn->query($sql);//connection is executing query
            if($result->num_rows == 0) { //result has the response from the database
              echo "That password is incorrect!";
            }
            else {
              $row = $result->fetch_assoc(); //this converts sql results into an array of row arrays (row is a lcoal array so session makes it a global array)
              $_SESSION["first_name"] = $row["first_name"]; //each row will have information and making it = to the session first name
              $_SESSION["username"] = $row["username"];
              $_SESSION["email"] = $row["email"];
              $_SESSION["last_name"] = $row["last_name"];
              session_write_close();
              header("Location: dashboard.php");
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
