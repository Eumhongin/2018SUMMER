<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <Script>
  var hong = new Array();

	<?php
		$idx = 0;
		for($idx = 0 ; $idx < 423; $idx++)
		{          ?>
			hong[<?php echo $idx; ?>] = <?php echo $idx; ?>;
			console.log(hong[<?php echo $idx; ?>]);
			<?php
		}
	?>

	
	</script>
  </body>
</html>
