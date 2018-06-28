<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include("module\sessionCheck.php");
     ?>
     <button type="button" onclick="location.href='Myroom/myPage.php'">내정보</button>
  </body>
</html>
