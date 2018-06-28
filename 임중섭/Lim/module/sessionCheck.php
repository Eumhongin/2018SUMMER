<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if($_SESSION['LOG_id'] == null)
    {
      echo "<script>location.href = '$DOCUMENT_ROOT/Lim/errorPage.php?error=404';</script>";
    } ?>
  </body>
</html>
