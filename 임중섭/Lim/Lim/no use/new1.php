<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
    .shield{
      width: 50px;
      background-color: red;

    }
    .text{
      overflow-wrap:break-word;

    }
  </style>
</head>

<body>
<?php 	
	include("module\dbConnect.php"); 
	include("module\dbContentsEcho.php"); 
	
	$WorryList = DB_echo('SELECT * FROM worryinfo ORDER BY RegisterDate DESC','Content');
	$WL_count = $i;
	$i = 0;


	?>
  <pre><?php echo $WorryList[$i++];?></pre>
  <pre><?php echo $WorryList[$i++];?></pre>
  <pre><?php echo $WorryList[$i++];?></pre>
  <pre><?php echo $WorryList[$i++];?></pre>
  <pre><?php echo $WorryList[$i++];?></pre>
  <pre><?php echo $WorryList[$i++];?></pre>
  <pre><?php echo $WorryList[$i++];?></pre>
  <pre><?php echo $WorryList[$i++];?></pre>
  <div class="shield">
    <div class="text">

    </div>

  </div>

  <script type="text/javascript">
  var text = document.getElementsByClassName("text");
  alert(text[0].innerHTML);

  </script>
</body>

</html>

