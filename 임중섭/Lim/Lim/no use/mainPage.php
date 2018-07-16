<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
       <button type="button" onclick="location.href='Myroom/myPage.php'">내정보</button> 
	<?php
//    include("module\sessionCheck.php");
	include("module\dbConnect.php");
	include("module\dbContentsEcho.php");
	
	$sqlz1 = "SELECT * FROM worryinfo";
	
	$adsf = DB_echo($sqlz1, 'Content');
	
	$i=0; 
	while($adsf[$i]!=null)
	{
		echo $adsf[$i]."</br>"; 
		$i++;
		
	}


	?>

  </body>
</html>
