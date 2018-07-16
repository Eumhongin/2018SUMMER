
    <?php
	
	$i = 0;
	  function DB_echo($sql, $field)
  {
	  $GLOBALS['i'] = 0;
	$result = mysqli_query($GLOBALS['conn'], $sql);
	  
	  while($row = mysqli_fetch_array($result))
	  {
		  
		  $value[$GLOBALS['i']] = $row[$field];
		  $GLOBALS['i']++;
	  }
	  
	  return $value;
  }		
	?>
