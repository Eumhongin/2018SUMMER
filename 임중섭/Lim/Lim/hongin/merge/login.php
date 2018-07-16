<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include("module\dbConnect.php");
	include("module\dbContentsEcho.php");
	
	$member_id = $_POST['LOG_id'];
//	echo $member_id."</br>";
    $sql = "SELECT PasswordSalt FROM userinfo WHERE UserEmail = '$member_id' ";
	$pwSalt = DB_echo($sql, 'PasswordSalt');	
//	echo $pwSalt[0]."</br>";
	
	$asciii = $_POST['LOG_pw'].$pwSalt[0];
	
	for($idx = 0; $idx < strlen($asciii); $idx++)
	{
		echo ord($asciii[$idx])."";
		$aaaa .= ord($asciii[$idx]);

	}
	echo "</br>";
	echo $aaaa."</br>";
	;
//	$member_pw = strtoupper(hash('md5', $_POST['LOG_pw'].$pwSalt[0],true));
//	echo $member_pw."</br>";
	
	$member_pw = hash('md5', $aaaa, true);
		echo $member_pw."</br>";
	
	$sql2 = "SELECT UserPassword FROM userinfo WHERE UserEmail = '$member_id' ";
	$pw2 = DB_echo($sql2,'UserPassword');
	echo strlen($member_pw)."</br>";
	echo $pw2[0]."</br>";
	echo strlen($pw2[0])."</br>";
	
//	echo $member_pw."</br>ok</br>";
//	'�7_���L3��(|��' /// �7_���L3��(|��

    $sql1 = "SELECT UserUID FROM userinfo WHERE UserPassword = ".strtoupper(hash('md5', $_POST['LOG_pw'].$pwSalt[0],true))."";
	  
	$result1 = mysqli_query($conn, $sql1);
	while($row = mysqli_fetch_array($result1))
	{
		echo "</br>".$row['UserUID'];
	}	
	 
	//$UID = DB_echo($sql1, 'UserUID');
	//echo $UID[0]."</br>";

	/*
    if($result != null)
    {
      $_SESSION['LOG_id'] = $member_id;
      echo "<script>alert('되나??');</script>";
      //echo "<script>location.href = 'mainPage.php';</script>";
    }else
	{
		echo "<script>alert('Check id or Pw');</script>";
		echo "<script>location.href = 'index.html';</script>";
	}*/
	
    mysqli_close();
     ?>
  </body>
</html>
