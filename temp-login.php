
<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
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
}
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>IndyHub</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  </head>
  <body class="homepage is-preload">
    <div id="page-wrapper">
      <!-- Header -->
      <div id="header">
          <!-- Inner -->
          <div class="inner" style="margin: 20px; width: 700px">
            <header>
              <h1><a href="index.html" id="logo">IndyHub</a></h1>
              <hr/>
              <p>Welcome Back</p>
              <form id="login" action="" class="form" method="post" enctype='multipart/form-data'/>
                <fieldset>
                  <div>
                    Username: <input type="text" name="username"/>
                  </div>
                  <div>
                    Password:<input type="password" name="password"/>
                  </div>
                  <div>
                    <input type="submit" value="Register" class="button"/></div
                                 <div style="color:blue;"> <?php echo $message; ?> </div>
                </fieldset>
              </form>
              </br>
            </header>
          </div> <!--end of inner class-->
      </div> <!--end of header-->
    </div> <!--end of page-wrapper-->

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.dropotron.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>



  </body>
</html>

