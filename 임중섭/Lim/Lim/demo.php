<?php
	header("Content-Type: application/json;");
	include("module\dbConnect.php"); 
	include("module\dbContentsEcho.php");
	$currentTime = date("Y-m-d H:i:s");


//	$StoryList = DB_echo('SELECT * FROM storyinfo ORDER BY RegisterDate DESC','Content');
	
	$myArr = DB_echo('SELECT * FROM worryinfo WHERE ShareEndTime > "'.$currentTime.'" ORDER BY RegisterDate DESC','Content');
//	$result = array();
	//$result = $myArr -> fetch_all($MYSQLI_ASSOC);

 

	echo json_encode($myArr);*/
?>