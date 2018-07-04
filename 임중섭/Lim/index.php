<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>test page</h1>
    <hr>
    <div id="content"class="content">

    <form action="test.php" method="post">
      <input type="text" name="LOG_id" >
      <input type="password" name="LOG_pw" required>
      <button type="submit">Login</button>
    </form>

    </div>

    <div class="todak">

    </div>


    <?php
    $i=14;
    for($a = 0 ; $a < 14; $a++)
    {
      $content_from_php[$a] = '안녕이라asd는 말로..';
    }

    for($a = 0 ; $a < 14; $a++)
    {
      echo $content_from_php[$a];
    }
    ?>

    <script type="text/javascript">
    var dd = "hell";
    var index_from_php = <?= $i; ?>;
    //var content_from_php =;
    var content = document.getElementById("content");

      for(var i = 0;i<index_from_php;i++)
      {
        <?= $i=0;?>

        var div = document.createElement("DIV");
        div.className = "comment";
        div.id = "comment";
        div.innerHTML = "<?= $content_from_php[$i];?>";
        content.appendChild(div);
        <?= $i++; ?>
      //  todak.innerHTML = "<br>";
      }



    </script>

  </body>
</html>
