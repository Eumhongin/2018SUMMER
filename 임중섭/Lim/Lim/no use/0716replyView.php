    <?php
	header("Content-Type:application/json");
	include("..\module\dbConnect.php");			//Don't remove!!!!!!!!!!!!
	include("..\module\dbContentsEcho.php");
	/*$worryID = $_POST['WorryUID'];
	$replyContents = $_POST['reply_contents'];
	$userUID = $_POST['UserUID'];
	$userAge = $_POST['UserAge'];
	
	$reply_sql = "INSERT INTO worryreply (WorryUID, UserUID, UserAge, Content)
	VALUES('$worryID','$UserUID','$UserAge','$replyContents')";
	mysqli_query($conn, $reply_sql);

	*/
	//echo $_POST['cont'];
	
	if($_POST['cont'] != null)
	{
		$q = $_POST['cont'];
		
		$result = mysqli_query($conn, "SELECT * FROM worryinfo WHERE Content = '".$q."' ");
		$i =0;
		
		if($result != null)
		{
			while($row=mysqli_fetch_array($result)) {
				$content[$i] = $row['WorryUID'];
	
				$i++;
				
			   
			}///$c ="abcd";
			//echo json_encode($content); 
		}//echo json_encode(321);
		
		$result = mysqli_query($conn,"SELECT * FROM worryreply WHERE WorryUID = ".$content[0]."");
		$i =0;
		
		if($result != null)
		{
			while($row=mysqli_fetch_array($result)) {
				$ww[0][$i] = $row['Content'];
				//$ww[1][$i] = $row['UserUID'];
				//$ww[2][$i] = $row['ReplyRef'];
				//$ww[3][0] = $row['WorryUID'][0];
				
				//$ww[$i] = $row['Content'];
				$i++;
				
			   
			} 
		}echo ($ww);
	}//echo json_encode(5);
	/*$content_sql = "SELECT * FROM worryinfo WHERE Content = '".$_POST['cont']."'";
	$content = DB_echo($content_sql, 'WorryUID');
		echo $content[0];
		
		
		
	$reply_sql = "SELECT * FROM worryreply WHERE WorryUID = ".$content[0]."";
	$ww = DB_echo($reply_sql, 'Content');
	echo json_encode($ww[i]);
	}else if($_POST['cont'] == null)
	{
		echo json_encode(1);
	}*/
	
	
	/*if($ww != null)
	{
		$_SESSION['WC'] = $ww;
		echo "<script>location.href = 'test.php';</script>";
	}else
	{
		echo "<script>alert('ss');</script>";
	}
	*/
	
	
	
	mysqli_close();
     ?>

