<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143101716-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143101716-2');
</script>


<?php
$host = "localhost";
$db_username = "sabasharf";
$db_password = "Iloveatif1";
$db_name = "IndyHub";

$first_name = htmlspecialchars($_POST['first_name']);
$last_name = htmlspecialchars($_POST['last_name']);
$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['email']);
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
        $sql = "INSERT INTO `users` (`first_name`, `last_name`, `username`, `password`, `date`, `email`) VALUES ('$first_name', '$last_name', '$username', '$password', CURRENT_TIMESTAMP, '$email');";

        if ($conn->query($sql)) {
          echo "Thank you for registering! We'll be in touch shortly.";
          header("Location: registration-success.html");
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
