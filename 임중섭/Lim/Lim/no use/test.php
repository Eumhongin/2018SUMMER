<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //include("module\dbConnect.php");			//Don't remove!!!!!!!!!!!!
	//include("module\md5hash.php");


	
	
	/*$ps = '';
	$pw = 'misozium23';
	$rand_string = genRandom(32); // 32byte random string
	$base64 = base64_encode($rand_string);
		echo $base64."</br>";
	for($idx = 0; $idx < strlen($base64); $idx++)
	{
		echo ord($base64[$idx]);
		$ps .= ord($base64[$idx]);
	}
		echo "</br>hash : ".hash('md5', $pw.$ps,false);
		echo "</br>Big,,, : ".strtoupper(hash('md5', $pw.$ps,false));
	*/
	/*$pw = 'misozium23!';
    $member_pw = hash('md5', $pw.$ps);
    //$member_id = $_POST['LOG_id'];

	
	$sql = "INSERT INTO userinfo (UserEmail, UserPassword, PasswordSalt, adviserNick, adviserIntroduce) VALUES ('q2455@naver.com','$member_pw','$base64','','')";
	
	$result = mysqli_query($conn, $sql);
	*/
	

	mysqli_close();
	
	

     ?>
  </body>
</html>
