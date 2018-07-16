<!DOCTYPE html>
<?php session_start(); ?> 
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
	//include("..\module\sessionCheck.php");  
	include("..\module\dbConnect.php"); 
	include("..\module\dbContentsEcho.php");
	//if Login Success, email information save in session. So we use to session in query
	//$_SESSION['LOG_id'] 
	
	
	$userinfo_sql = "SELECT UserEmail, UserCoin, ReplyRecommendCount FROM userinfo WHERE UserUID='243'";
	$worryinfo_sql = "SELECT Content FROM worryinfo WHERE UserUID='243'";
	$worryreply_sql = "SELECT Content FROM worryreply WHERE UserUID='243'";
	$storyreply_sql = "SELECT Content FROM storyreply WHERE UserUID='243'";

	$product_sql =
	"SELECT p.productname, g.registerdate, g.quantity, u.advisernick from productinfo as p
	join giftinfo as g on p.productid = g.productid 
	join userinfo as u on u.useruid = g.adviseruid WHERE g.useruid='243'";

	$user_email = DB_echo($userinfo_sql, 'UserEmail');
	$user_coin = DB_echo($userinfo_sql, 'UserCoin');
	$user_RRC = DB_echo($userinfo_sql, 'ReplyRecommendCount');	//RRC == ReplyRecommendCount

	$worryinfo_contents = DB_echo($worryinfo_sql, 'Content');
	$w_contents_i = $i; // You can find $i in DB_echo(module\dbContentsEcho.php)
	$worry_reply = DB_echo($worryreply_sql, 'Content');
	$w_reply_i = $i;	//At here, $i is count of w_contents, w_reply and s_reply
	$story_reply = DB_echo($storyreply_sql, 'Content');
	$s_reply_i = $i;
	
	$product_name = DB_echo($product_sql,'productname');
	$product_date = DB_echo($product_sql,'registerdate');
	$product_quantity = DB_echo($product_sql,'quantity');
	$product_adviserNick = DB_echo($product_sql,'advisernick');
	
	mysqli_close();
  ?>
<!--  <div id = "Email">
  </div>
  
  <div id = "Coin">
  </div>
  
  <div id = "RRC">  ( DO NOT DELETE => RRC == ReplyRecommendCount )
  </div>

  <div id = "w_contents">	 ( DO NOT DELETE => w == worry //// s == story )
  </div>

  <div id = "w_reply">
  </div>

  <div id = "s_reply">
  </div> -->

  
  <script>
	/*var aaa = 1;
	
  
  var Email = document.getElementById("Email");
  var Coin = document.getElementById("Coin");
  var RRC = document.getElementById("RRC");
  var w_contents = document.getElementById("w_contents");
  var w_reply = document.getElementById("w_reply");
  var s_reply = document.getElementById("s_reply");
  
  var index_from_php = <?= $i; ?>;
  function from_php(var content,var index){
	  for(var i =0; i<index; i++)
	  {
		  var div = document.createElement("DIV");
		  div.id = "Email_content";
		  div.className = "Email_Content";
		  div.innerHTML = "<?= $Email_content_from_php[i]?>";
		  Email.appendChild("div");
	  }
  }
  */

  </script>
	  

    
	<table style="width:2400px">

      <tr>
        <td style="width:400px">상단에 이메일  </td>
        <td style="width:400px">작성 했던 글  </td>
        <td style="width:400px">작성 했던 Worry 댓글 </td>
		<td style="width:400px">작성 했던 Story 댓글 </td>
        <td style="width:400px">고마워요 개수(누적개수)  </td>
        <td style="width:400px">보낸 선물 name</td>
		<td style="width:400px">보낸 선물 date</td>
		<td style="width:400px">보낸 선물 reciver nickname</td>
		<td style="width:400px">보낸 선물 quantity</td>
      </tr>


	  <tr>
        <td><?php echo $user_email[0]; ?></td>
        <td><?php $i=0; while($worryinfo_contents[$i]!=null){echo $worryinfo_contents[$i]."</br>"; $i++;} ?></td>
        <td><?php $i=0; while($worry_reply[$i]!=null){echo $worry_reply[$i]."</br>"; $i++;} ?></td>
		<td><?php $i=0; while($story_reply[$i]!=null){echo $story_reply[$i]."</br>"; $i++;}?></td>
        <td><?php echo $user_coin[0]."(".$user_RRC[0].")";?></td>
        <td><?php $i=0; while($product_name[$i]!=null){echo $product_name[$i]."</br>"; $i++;} ?></td>
        <td><?php $i=0; while($product_date[$i]!=null){echo $product_date[$i]."</br>"; $i++;} ?></td>
        <td><?php $i=0; while($product_adviserNick[$i]!=null){echo $product_adviserNick[$i]."</br>"; $i++;} ?></td>
        <td><?php $i=0; while($product_quantity[$i]!=null){echo $product_quantity[$i]."</br>"; $i++;} ?></td>
		
      </tr>


    </table>
	
  </body>
</html>
