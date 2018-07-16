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
  //include("module\sessionCheck.php");
	include("module\userInformation.php");
	
	
	
	$i=0;
	$Write_contents = $_POST['contents']; ///////content
	$addslashes = addslashes($Write_contents);
	//echo $Write_contents."</br>".$Write_option_share."</br>".$Write_option_reply;
	
	//////////ShareTime
	if(!empty($_POST['IsShare']))
	{
		$Write_option_share = 1;//$_POST['IsShare'];
		$ShareEndTime = date("Y-m-d H:i:s",strtotime($day."+1day"));
	}else if(empty($_POST['IsShare']))
	{
		$Write_option_share = 0;
		$ShareEndTime = date("9999-12-31 00:00:00");
	}

	//////////Reply
	if(!empty($_POST['IsReply']))
	{
		$Write_option_reply = 1;//$_POST['IsReply'];
	}else {$Write_option_reply = 0;}
	
	
	//////////hashTag
	preg_match_all("/\\#([0-9a-zA-Z가-힣]*)/", $Write_contents, $hashtags);
	while($hashtags[1][$i] != null)
	{
		$i++; //hashTag count
	}
	
	/////////time
	//if(date(A) == "PM"){ $AM_PM = "오후"; }	
	//if(date(A) == "AM"){ $AM_PM = "오전"; }	
	//$RegisterDate =  date("Y-m-d H:i:s");		

	//USerUID, UserAge, Content, IsReply, IsSharePeriod, ShareEndTime
	$w_Contents_sql =
	"INSERT INTO worryinfo (UserUID, UserAge, Content, IsReply, IsSharePeriod, ShareEndTime)
	VALUES('$info_id[0]', '$info_age[0]', '$addslashes', '$Write_option_reply', '$Write_option_share', '$ShareEndTime')";
	
	
	if(mysqli_query($conn, $w_Contents_sql))
	{
		echo "<script>location.href = 'index.php';</script>";
	}
	
	mysqli_close();
  ?>

  </body>
</html>
