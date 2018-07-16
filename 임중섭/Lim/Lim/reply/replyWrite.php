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
	
	$reply = addslashes($_POST['reply']);
	$write_sql = "INSERT INTO worryreply (WorryUID, UserUID, UserAge, Content) VALUES(".$_SESSION['WorryUID'].", 701, 0,'".$reply."')";
	$ok = mysqli_query($conn, $write_sql);
	
	if(($_POST['reply'] != null)&&($ok != null))
	{
		
		echo "<script>location.href = 'test.php';</script>";
	}else
	{
		echo "<script>alert('ss');</script>";
	}
	
	
	
	
	mysqli_close();
     ?>
  </body>
</html>
