<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include("module\dbConnect.php");			//Don't remove!!!!!!!!!!!!
	include("module\dbContentsEcho.php");


	$qwe = "SELECT content FROM worryinfo order by registerdate desc limit 500";
	
	$mm = DB_echo($qwe, 'content');
	
	for($idx = 0 ; $idx < $i ; $idx++)
	{
		echo $mm[$idx]."</br>";
	}
	mysqli_close();
	
	

     ?>
  </body>
</html>
