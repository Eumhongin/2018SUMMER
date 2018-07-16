<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
	
    include("module\dbConnect.php");			//Don't remove!!!!!!!!!!!!
	include("module\dbContentsEcho.php");
	
	
	$aa = "SELECT * FROM worryinfo WHERE WorryUID = 1866078";
	$bb = DB_echo($aa, 'Content');
	$cc = DB_echo($aa, 'WorryUID');
	$_SESSION['WorryUID'] = $cc[0];
	echo $bb[0]."</br>";
	
	mysqli_close();
     ?>
	 <input type="button" name="버튼" value="reply View" onclick="location.href='replyView.php'";>
	<?php
	echo "</br>";
	
	if($_SESSION['WC'] != null)
	{
		for($idx= 0; $idx < count($_SESSION['WC']); $idx++)
		{
			echo stripslashes($_SESSION['WC'][$idx])."</br>";
		}
		$_SESSION['WC'] = null;
	}

	?>
	<form action="replyWrite.php" method = "post">
	<input type="text" name="reply" required>
	<button type="submit">Reply</button>
	</form>
  </body>
</html>
