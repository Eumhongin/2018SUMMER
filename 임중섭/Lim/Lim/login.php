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
	echo $pwSalt[0]."</br>";
	
	///////////////////////change to ascii code
	/*$asciii = $_POST['LOG_pw'].$pwSalt[0]; 
	
	for($idx = 0; $idx < strlen($asciii); $idx++)
	{
		echo ord($asciii[$idx])." ";
		$aaaa .= ord($asciii[$idx]);

	}
	echo "</br>";
	echo $aaaa."</br>";*/
	///////////////////////
	
	$member_pw = hash('md5', $_POST['LOG_pw'].$pwSalt[0],true);
	echo $member_pw."</br></br>";
	
	//$qml = base_convert(''.$member_pw.'',2,16);
	//echo $qml."</br>";
for($z = 0; $z< strlen($member_pw); $z++)
	{
		$qqq[$z] = $member_pw[$z];
		$aa .= ord($qqq[$z]);
		echo ord($qqq[$z])." => ".chr(239)."</br>";
		
	}
	if(chr(239).chr(191).chr(189) == chr(194)){echo "123123123";}
	echo strlen(chr(239).chr(191).chr(189));
	//$z = bin2hex(''.$member_pw.'');

//	$member_pw = hash('md5', $aaaa, true);
//	echo $member_pw."</br>";

	///////////////////////utf8 encoding
//	$qqq = mb_convert_encoding($member_pw,"UTF-8");
//	echo "</br></br>".$qqq."</br></br>";	
           
//	$qqq = utf8_encode($member_pw);
//	echo "</br></br>".$qqq."</br></br>";	
	///////////////////////
	
	$sql2 = "SELECT UserPassword FROM userinfo WHERE UserEmail = '$member_id' ";
	$pw2 = DB_echo($sql2,'UserPassword');
	echo strlen($member_pw)."</br>";
	echo $pw2[0]."</br>";
	echo strlen($pw2[0])."</br>";
for($z = 0; $z<strlen($pw2[0]); $z++)
	{
		$qqq1[$z] = $pw2[0][$z];
		$aa1 .= ord($qqq1[$z]);
		echo ord($qqq1[$z])." => ".$qqq1[$z]."</br>";
	}
	if($qqq[0] == $qqq1[0]){echo "123";}
//	echo gettype($pw2[0]);
	if($member_pw == $pw2[0]){echo "asdfasd";}
	
/*	$a= hex2bin("c251b794092d9e98f60160fbd72e2516");
	$b = bin2hex($pw2[0]);
	echo "</br>".$a;
	echo "</br>".$b;
	if($a == $b){echo "Yes!!!</br>";}*/
	
//	echo $member_pw."</br>ok</br>";
//	'�7_���L3��(|��' /// �7_���L3��(|��

    $sql1 = "SELECT UserUID FROM userinfo WHERE UserPassword = ".$member_pw."";
	  
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
