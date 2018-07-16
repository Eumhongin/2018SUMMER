<?php
	include("..\module\dbConnect.php");			//Don't remove!!!!!!!!!!!!
	include("..\module\dbContentsEcho.php");
    if($_POST['matesearch'] != null) {    
	
        $q=$_POST['matesearch'];    
		$result=mysqli_query($conn,"SELECT * FROM userinfo WHERE IsAdviser = 1 AND AdviserNick LIKE '%".$q."%'");
		$i = 0;
		if($result != null)
		{
			while($row=mysqli_fetch_array($result)) {
				$Minfo[0][$i] = $row['AdviserNick'];
				$Minfo[1][$i] = $row['AdviserImage'];
				$i++;
				
			   
			} echo json_encode($Minfo);
		}
		
    }else if($_POST['matesearch'] == null)
	{  
		$result=mysqli_query($conn,"SELECT * FROM userinfo WHERE IsAdviser = 1");
		$i = 0;
        while($row=mysqli_fetch_array($result)) {
            $Minfo[0][$i] = $row['AdviserNick'];
			$Minfo[1][$i] = $row['AdviserImage'];

			$i++;
            
           
        } echo json_encode($Minfo);
	}
?>