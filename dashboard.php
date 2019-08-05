
<!DOCTYPE HTML>
<html>
  <?php
    session_start();
    $first_name = $_SESSION["first_name"];
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
    <link rel="stylesheet" href="assets/css/dashboard.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  </head>
  <body class="homepage is-preload">
    <div id="page-wrapper">
      <!-- Header -->
      <div id="header">
          <!-- Inner -->
          <div class="inner" style="margin: 20px; width: 700px">
            <header>
             <h1><id="logo">Welcome <?php echo $first_name;?></h1>
              <hr/>
              <p>Your Dashboard</p>
              <a href = "profile.php" class="button circled scrolly" style="margin: 30px;">Profile</a>
							<a href = "#information" class="button circled scrolly" style="margin: 30px;">Apps</a>
							<a href = "#information" class="button circled scrolly" style="margin: 30px;">Services</a>
              <hr>      </hr>
              <form id="logout" action="logout.php" class="form" method="post" enctype='multipart/form-data'/>
                      <div>
                        <input type="submit" value="sign out" class="square"></div>
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
