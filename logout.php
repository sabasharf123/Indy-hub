<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143101716-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143101716-2');
</script>


<?php
session_start();
unset($_SESSION['username']);
session_destroy();

header("Location: index.html");
exit;
?>
