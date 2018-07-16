<?php
	include("..\module\dbConnect.php");			//Don't remove!!!!!!!!!!!!
	include("..\module\dbContentsEcho.php");
    if($_POST['searchwords']) {    
	
        $q=$_POST['searchwords'];    
		/////////////////////////////Search hashtag
		$result=mysqli_query($conn,"SELECT * FROM tagword WHERE Word LIKE '%".$q."%'");
		$i = 0;
        while($row=mysqli_fetch_array($result)) {
            $Tword[$i] = $row['Word'];
			$i++;
            
           
        } echo json_encode($Tword);
		/////////////////////////////
		
		/////////////////////////////search worry content
        /*$result=mysqli_query($conn,"SELECT * FROM worryinfo WHERE Content LIKE '%".$q."%'");
		$i = 0;
        while($row=mysqli_fetch_array($result)) {
            $Tword[$i] = $row['Content'];
			$i++;
            
           
        } echo json_encode($Tword);*/
		/////////////////////////////
		
		
    }
?>