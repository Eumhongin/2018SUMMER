<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

    </head>
 
    <body>    
	<?php
	$tag = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k');
	echo $tag[0];
	?>
        <form action="signup.php" method="POST">
			NickName<input type="text" name="nick"><br>
			Image<br>
			AdviceField(1~3) <?php$i=1; while($i < 12){echo '<input type="checkbox" name="'.$i.'" value="'.$i.'">'.$tag[$i];
			$i++;}?>
			
		</form>
    </body>
</html>