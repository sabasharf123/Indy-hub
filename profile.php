<!DOCTYPE HTML>
<html>
<?php
  session_start();
  $username = $_SESSION["username"];
  $first_name = $_SESSION["first_name"];
  $last_name = $_SESSION["last_name"];
  $email = $_SESSION["email"];
?>
	<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143101716-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143101716-2');
</script>
		<title>IndyHub</title>
		<link rel="icon" href="https://pbs.twimg.com/profile_images/1141121235109027841/qhi-2_U7_400x400.jpg">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/profile.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
<body>
<!-- Nav -->
    <nav id="nav">
      <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="#story">Applications</a></li>
        <li><a href= "login.html">Services</a></li>
      </ul>
    </nav>

    <main class="container">
  <section class="effect effect-a">
    <h1 class="effect__heading">Name</h1>
    <p><?php echo $first_name;?> <?php echo $last_name;?></p>
  </section>

  <section class="effect effect-a">
    <h1 class="effect__heading">Username</h1>
    <p><?php echo $username;?></p>
  </section>

  <section class="effect effect-a">
    <h1 class="effect__heading">Email</h1>
    <p><?php echo $email;?></p>
  </section>

  <section class="effect effect-a">
    <h1 class="effect__heading">Current Client</h1>
    <p></p>
  </section>

  <section class="effect effect-a">
    <h1 class="effect__heading">Current Contracts</h1>
    <p></p>
  </section>

  <section class="effect effect-a">
    <h1 class="effect__heading">Documents</h1>
    <p></p>
  </section>


</main>



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
