<?php
    $title = "Kris' Games";
    ini_set("log_errors", 1);
    ini_set("error_log", "./php-error.log");
?>
<!DOCTYPE HTML>
<html>

  <?php include "header.php"; ?>

  <body>
    <?php include "bannerAndNavbar.php"; ?>

    <div class="row">
        <div class="large-12 columns"> <h1><center>Recent additions</center></h1> </div><hr>
        <div class="large-4 columns panel">
            <h2 style="color:blue">Game title here</h2>
            <p>This is the start of a paragraph for the content</p>
        </div>
        <div class="large-4 columns panel">
            <h2 style="color:green">Game title here</h2>
            <p>This is the start of a paragraph for the Xbox content</p>
        </div>
        <div class="large-4 columns panel">
            <h2 style="color:red">Game title here</h2>
            <p>This is the start of a paragraph for the PC content</p>
        </div>
    </div>
  </body>
</html>