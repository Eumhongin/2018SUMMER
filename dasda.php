<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
	$i =0;
$conn = mysqli_connect(
  '180.71.161.73',
  'root',
  'NAtest202!',
  'memoryeraser',
  '3306');
	$sqli = mysqli_select_db($conn,"memoryeraser");
  if($sqli)
    echo" fff";
  else {
    echo "asdasd";
  }
  //
  //   $sql = "SELECT * FROM worryreply limit 100";
	// $sql2 = "desc worryreply";
  //   $result = mysqli_query($conn, $sql);
	// $result1 = mysqli_query($conn, $sql2);
	// while($row = mysqli_fetch_array($result1))
  //   {
  //
  //
	//   $i++;
  //   }
	// //echo $i;
	// while($row = mysqli_fetch_array($result))
  //   {
	// 	for($k = 0;$k<$i;$k++)
	// 		echo "$row[$k]";
	// 	echo "<br>";
  //   }

?>
  </body>
</html>
