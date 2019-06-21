<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
  if (!empty($password)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "Iloveatif1";
    $dbname = "IndyHub_Users";
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if(mysqli_connect_error()){
      die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
    }
    else {
      $sql = "INSERT INTO users (username, password) values ('$username', '$password')";
      if ($conn->$query($sql)){
        echo "new record inserted";
      }
      else {
        echo "error, something wrong"
      }
      $conn->close();
    }
  }
  else {
    echo "Password is empty..";
    die();
  }
else {
  echo "Username is empty..";
  die();
}
?>
