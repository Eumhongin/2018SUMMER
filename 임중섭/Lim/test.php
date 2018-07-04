<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include("module\dbConnect.php");

      $d = "오전";
      echo date("9999-12-31 $d 12:00:00");
      // $sql = "SELECT pw_salt FROM login WHERE id = '$_POST[LOG_id]' ";
      //
      // $result = $conn->query($sql);
      // $row = $result->fetch_array(MYSQLI_ASSOC);
      //
      // echo $row[pw_salt];

      mysqli_close();
    ?>

  </body>
</html>
