<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // $conn = mysqli_connect("localhost","root","misozium23");
    // $sqli = mysqli_select_db($conn,"test");
    include("module\sessionCheck.php");
    include("module\dbConnect.php");

    $pw_hash_result = hash('sha256', $_POST['LOG_pw']);
    $member_id = $_POST['LOG_id'];

    $sql = "SELECT * FROM login WHERE id = '$member_id' and pw ='$pw_hash_result' ";
    $result = $conn->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);


    if($row != null)
    {
      $_SESSION['LOG_id'] = $member_id;
      echo "<script>alert('되나?');</script>";
      echo "<script>location.href = 'mainPage.php';</script>";
    }
    mysqli_close();
     ?>
  </body>
</html>
