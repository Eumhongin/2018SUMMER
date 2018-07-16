
	<?php
//		include("dbConnect.php");
//		include("dbContentsEcho.php");
		//$member_id = $_SESSION['LOG_id'];  >> if i complete login, i use session in this module<<
		$info_sql = "SELECT UserUID, UserAge FROM userinfo WHERE UserEmail = 'worry2000@cotoone.com'";
		
		$info_id = DB_echo($info_sql, 'UserUID');
		$info_age = DB_echo($info_sql, 'UserAge');
		
		

	?>

