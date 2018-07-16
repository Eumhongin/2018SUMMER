<!DOCTYPE html>
<?php session_start();?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
	include("module\dbConnect.php");			//Don't remove!!!!!!!!!!!!
	include("module\dbContentsEcho.php");
	/*$worryID = $_POST['WorryUID'];
	$replyContents = $_POST['reply_contents'];
	$userUID = $_POST['UserUID'];
	$userAge = $_POST['UserAge'];
	
	$reply_sql = "INSERT INTO worryreply (WorryUID, UserUID, UserAge, Content)
	VALUES('$worryID','$UserUID','$UserAge','$replyContents')";
	mysqli_query($conn, $reply_sql);

	*/
	//echo $_POST['cont'];
	
	/*$content_sql = "SELECT * FROM worryinfo WHERE Content = '2'";
	$content = DB_echo($content_sql, 'WorryUID');
		echo $content[0];
		*/
		
		
	$reply_sql = "SELECT * FROM worryreply WHERE WorryUID = ".$_SESSION['WorryUID']."";
	$ww = DB_echo($reply_sql, 'Content');
	//echo json_encode(stripslashes($ww[i]));
	
	
	
	if($ww != null)
	{
		$_SESSION['WC'] = $ww;
		echo "<script>location.href = 'test.php';</script>";
	}else
	{
		echo "<script>alert('ss');</script>";
	}
	
	
	
	
	mysqli_close();
     ?>
  </body>
</html>
