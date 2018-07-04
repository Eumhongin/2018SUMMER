<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function dbContentsEcho($result, $field)
    {
      while($row = mysqli_fetch_arry($result))
      {
        echo $row[$field];
      }
    } ?>
  </body>
</html>
오전
