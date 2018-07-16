<?php
include("..\module\dbConnect.php");			//Don't remove!!!!!!!!!!!!
	include("..\module\dbContentsEcho.php"); 
	
        
		/*while( $i < 10)
		{
			$aa[$i] = $i;
			$i++;
		}echo json_encode($aa);*/
        $result=mysqli_query($conn,"SELECT * FROM tagword WHERE word LIKE '%Nice%'");
		$i = 0;
        while($row=mysqli_fetch_array($result)) {
            $Tword[$i] = $row['word'];
			echo $Tword[$i]."</br>";
			$i++;
            
           
        } echo json_encode($Tword);
    

?>