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

  $email = htmlspecialchars($_POST['email']);
  // Create connection
  $conn = new mysqli($host, $db_username, $db_password, $db_name);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // Connected, execute queries
  else {
    $sql = "INSERT INTO `IndyHub_Emails` (`email`) VALUES ('$email');";
    if ($conn->query($sql)) {
      echo "Thank you for signing up for our newsletter! You'll hear from us soon!";
      header("Location: index.html");
    }
    else {
      if ($conn->errno == 1062) {
        echo "You're already registered! Check your email for our newsletter!";
      }
      else {
        echo "Error: " . $sql . "<br>". $conn->error . "<br>". $conn->errno;
      }
    }
  }
  $conn->close();
?>
