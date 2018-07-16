<?php

	$conn = mysqli_connect("localhost","root","NAtest202!");
    $sqli = mysqli_select_db($conn, "memoryeraser"); 
	
	$result = mysqli_query($conn, $sql);
	$i = 0;
	while($row = mysqli_fetch_array($result))
	{
		$deleteIndex[$i] = $row['WorryUID'];
	}
	
	
	
	$currentTime = date("Y-m-d H:i:s");
	
	//$deleteTime = date("2018-07-04 15:55:00");
	
	//$result = strtotime($deleteTime) - strtotime($currentTime);
	echo $result."</br>";
	if($result <= 0)
	{
		$sql = "DELETE FROM worryinfo WHERE WorryUID = 1866135";
		//mysqli_query($conn, $sql);
		echo "Delete Time is now";
	}else if($result > 0)
	{
		echo "Wait ^^";
	}


?>