<?php
	include("..\module\dbConnect.php");			//Don't remove!!!!!!!!!!!!
	include("..\module\dbContentsEcho.php");
    if($_POST['searchwords']) {    
        $q=$_POST['searchwords'];    
		/*while( $i < 10)
		{
			$aa[$i] = $i;
			$i++;
		}echo json_encode($aa);*/
        $result=mysqli_query($conn,"SELECT * FROM tagword WHERE Word LIKE '%".$q."%'");
		$i = 0;
        while($row=mysqli_fetch_array($result)) {
            $Tword[$i] = $row['Word'];
			$i++;
            
           
        } echo json_encode($Tword);
    }
?>