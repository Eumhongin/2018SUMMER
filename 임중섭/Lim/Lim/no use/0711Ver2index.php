<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <link rel="stylesheet" href="font/font.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="js/script.js"></script> -->

  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/core.css">
  <link rel="stylesheet" href="css/Mate.css">
  <link rel="stylesheet" href="css/reply.css">
  <script>

  var aside = document.getElementsByClassName("aside");
  var asidegroup = document.getElementsByClassName("asidegroup");
  $(document).ready(function(){
  
  	searchajax();  
	mateSearchAjax();
	

    $('.asidegroup').css({"height":$(window).outerHeight()-$('header').outerHeight(),'top':$('header').outerHeight(),'right':-$('.asidegroup').outerWidth()});

    $('.aside').on('click',function(){
      if(asidegroup[0].classList.contains("close"))
      {
        //alert($('.asidegroup').outerWidth());
        $('.asidegroup').animate({right:'0'},300);
        asidegroup[0].classList.remove("close");
        asidegroup[0].classList.add("open");

      }
      else {
        $('.asidegroup').animate({right:-$('.asidegroup').outerWidth()},300);
        asidegroup[0].classList.add("close");
        asidegroup[0].classList.remove("open");
      }

    });
  });


  </script>



</head>

<body>
	
  <!-- reply form default = hide-->
  <div class="click_list">

    <!-- vertival line -->
    <div class="vi">

    </div>
    <!-- content wrapper include reply and text -->
    <div class="click_list_content row container">
      <!-- the text side is LEFT -->
      <div class="content_left col-2">
        <div class="content_shield">
          <div class="content_text">
            바보같아..<br>
            나도 힘든걸..<br>
            <br>
            너도 힘드니..?<br>
            눈을감고 새카만 밤을<br>
            즐기면서..<br>
            <br>오늘도 하루가 지나가네요..<br>
            -Oreuka<br>

          </div>
          <div class="content_thanks row">
            <img src="img/thx_icon.png" alt="고마워요">
            <span class="content_thanks_count">3</span>
          </div>

        </div>
      </div>
      <!-- The Reply side is Right -->
      <div class="content_right col-2">
        <div class="reply_shield">


          <!-- the block of reply -->
          <div class="reply_box">
            <div class="reply_wrapper row">
              <div class="reply_left">
                <span>생일 축하해요. 올해도 벅찬 날이 가득하길 바랄게요</span>
              </div>
              <div class="report">
                <img src="img/siren.png" alt="신고">
              </div>
            </div>
            <div class="bottom_side row">
              <div class="reply_thanks">
                <img src="img/thx_icon.png" alt="고마워요">
              </div>
              <div class="reply_thx_count">
                <span>1</span>
              </div>
              <div class="last_date">
                <span>3일전</span>
              </div>
            </div>
          </div>
          <!-- box end -->

          <div class="reply_box">
            <div class="reply_wrapper row">
              <div class="reply_left">
                <span>생일 축하드려요^^</span>
              </div>
              <div class="report">
                <img src="img/siren.png" alt="신고">
              </div>
            </div>
            <div class="bottom_side row">
              <div class="reply_thanks">
                <img src="img/thx_icon.png" alt="고마워요">
              </div>
              <div class="reply_thx_count">
                <span>1</span>
              </div>
              <div class="last_date">
                <span>3일전</span>
              </div>
            </div>
          </div>
          <!-- the block of reply_reply -->

          <div class="reply_reply_box">
            <!-- 대댓글 유져에의한ㄴㄴ-->
            <div class="Write_By_User">

            </div>
            <div class="Write_By_Writer">

            </div>
            <!-- 대댓글 글쓴이에의한 댓글 글쓴이 아님.-->
            <div class="Write_By_Writer">
              <div class="identified_writer">
                <span>글쓴이</span>
              </div>
              <div class="reply_reply_wrapper reply_box row">
                <div class="reply_wrapper row">
                  <div class="reply_left">
                    <span>고마워요</span>
                  </div>
                  <div class="report">
                    <img src="img/siren.png" alt="신고">
                  </div>
                </div>
                <div class="bottom_side row">
                  <div class="reply_thanks">
                    <img src="img/thx_icon.png" alt="고마워요">
                  </div>
                  <div class="reply_thx_count">
                    <span>1</span>
                  </div>
                  <div class="last_date">
                    <span>3일전</span>
                  </div>
                </div>
              </div>
            </div>


            <div class="Write_By_User">
              <!-- the block of reply -->
              <div class="reply_reply_wrapper reply_box row">
                <div class="reply_wrapper row">
                  <div class="reply_left">
                    <span>저도 5학년 썜 케잌 사다드린게 생각나욬 ㅋㅋ</span>
                  </div>
                  <div class="report">
                    <img src="img/siren.png" alt="신고">
                  </div>
                </div>
                <div class="bottom_side row">
                  <div class="reply_thanks">
                    <img src="img/thx_icon.png" alt="고마워요">
                  </div>
                  <div class="reply_thx_count">
                    <span>1</span>
                  </div>
                  <div class="last_date">
                    <span>3일전</span>
                  </div>
                </div>
              </div>
              <!-- box end -->
            </div>


            <div class="Write_By_Writer">
              <div class="identified_writer">
                <span>글쓴이</span>
              </div>
              <!-- the block of reply -->
              <div class="reply_reply_wrapper reply_box row">
                <div class="reply_wrapper row">
                  <div class="reply_left">
                    <span>ㅋㅋㅋㅋㅌㅋㅋㅋ 크으~ 선생님 챙겨주는 마음 멋있어요 !!</span>
                  </div>
                  <div class="report">
                    <img src="img/siren.png" alt="신고">
                  </div>
                </div>
                <div class="bottom_side row">
                  <div class="reply_thanks">
                    <img src="img/thx_icon.png" alt="고마워요">
                  </div>
                  <div class="reply_thx_count">
                    <span>1</span>
                  </div>
                  <div class="last_date">
                    <span>3일전</span>
                  </div>
                </div>
              </div>
              <!-- box end -->
            </div>


            <div class="Write_By_User">
              <!-- the block of reply -->
              <div class="reply_reply_wrapper reply_box row">
                <div class="reply_wrapper row">
                  <div class="reply_left">
                    <span>제가 케잌사서 반애들 복도 끝으로 모아서 <br> 서프라이즈 해드렸죠..<br>ㅎ(뿌듯뿌듯)</span>
                    <!-- 댓글 내용 -->
                  </div>
                  <div class="report">
                    <img src="img/siren.png" alt="신고">
                  </div>
                </div>
                <div class="bottom_side row">
                  <div class="reply_thanks">
                    <img src="img/thx_icon.png" alt="고마워요">
                  </div>
                  <div class="reply_thx_count">
                    <span>1</span>
                    <!-- 고마워요 몇개 받았는지 -->
                  </div>
                  <div class="last_date">
                    <span>3일전</span>
                    <!-- 글 언제썼는지 -->
                  </div>
                </div>
              </div>
              <!-- box end -->
            </div>



          </div>
          <!-- the block of reply -->

          <!-- the block of reply -->
          <div class="reply_box">
            <div class="reply_wrapper row">
              <div class="reply_left">
                <span>생일 축하해요. 올해도 벅찬 날이 가득하길 바랄게요</span>
              </div>
              <div class="report">
                <img src="img/siren.png" alt="신고">
              </div>
            </div>
            <div class="bottom_side row">
              <div class="reply_thanks">
                <img src="img/thx_icon.png" alt="고마워요">
              </div>
              <div class="reply_thx_count">
                <span>1</span>
              </div>
              <div class="last_date">
                <span>3일전</span>
              </div>
            </div>
          </div>
          <!-- box end -->
          
          <!-- the block of reply -->
          <div class="reply_box">
            <div class="reply_wrapper row">
              <div class="reply_left">
                <span>생일 축하해요. 올해도 벅찬 날이 가득하길 바랄게요</span>
              </div>
              <div class="report">
                <img src="img/siren.png" alt="신고">
              </div>
            </div>
            <div class="bottom_side row">
              <div class="reply_thanks">
                <img src="img/thx_icon.png" alt="고마워요">
              </div>
              <div class="reply_thx_count">
                <span>1</span>
              </div>
              <div class="last_date">
                <span>3일전</span>
              </div>
            </div>
          </div>
          <!-- box end -->

          <!-- the block of reply -->
          <div class="reply_box">
            <div class="reply_wrapper row">
              <div class="reply_left">
                <span>생일 축하해요. 올해도 벅찬 날이 가득하길 바랄게요</span>
              </div>
              <div class="report">
                <img src="img/siren.png" alt="신고">
              </div>
            </div>
            <div class="bottom_side row">
              <div class="reply_thanks">
                <img src="img/thx_icon.png" alt="고마워요">
              </div>
              <div class="reply_thx_count">
                <span>1</span>
              </div>
              <div class="last_date">
                <span>3일전</span>
              </div>
            </div>
          </div>
          <!-- box end -->



        </div>

      </div>

    </div>
  </div>
  <!-- login fade out link by login.js-->

  <form class="loginpop hide" action="index.html" method="post">
    <img class="img_login" src="img/flower.jpg" alt="로고사진">
    <br>
    <span class="comment_login">Introducing comment<br></span>
    <br>
    <input class="ID" type="email" placeholder="이메일" required>
    <br>
    <input class="pass" type="text" placeholder="비밀번호" required>
    <br>
    <button class="Enter" type="submit" name="button">로그인</button>

  </form>
  <div class="forlogin">

  </div>
  <!-- For mobile menu UNDER 768px -->
  <div class="M-menu">
    <img src="img/flower.jpg" alt="">
    <ul>
      <li>잡담</li>
      <li>고민</li>
      <li>상점</li>
      <li>설정</li>

    </ul>
  </div>
  <!-- basic tap to all page -->
  <header id="header" class="row">
    <div class="container">
	<!--<button onclick="hell()">hhhhhh</button>-->
      <div class="Logo">
        나쁜기억지우개
      </div>
      <form class="SearchBar" action="index.html" method="post">
        <input type="text" id="searchword" value="" placeholder=" # 해시태그검색">
		<div id="results"></div>
      </form>
      <div class="concern" onclick="click_worry();">
        고민
      </div>
      <div class="joke" onclick="click_story();">
        잡담
      </div>

      <div class="login">
        <a href="#">로그인 하세요</a>
      </div>
      <div class="alarm">
        <img src="" alt="알람">
      </div>
      <div class="store">
        <img src="" alt="상점">
      </div>
      <div class="setting">
        <img src="" alt="설정">
      </div>

    </div>
	<script src="mateSearch/mateSearch.js" charset="utf-8"></script>
	<script src="hashTag/search.js"></script>
  </header>

  <?php 	
	include("module\dbConnect.php"); 
	include("module\dbContentsEcho.php"); 
	
	$currentTime = date("Y-m-d H:i:s");
	
	$WorryList = DB_echo('SELECT * FROM worryinfo WHERE ShareEndTime > "'.$currentTime.'" ORDER BY RegisterDate DESC','Content');
	$WL_count = $i;
	for($x = 0 ; $x < count($WorryList); $x++)
	{
		$WorryList[$x] = htmlspecialchars(stripslashes($WorryList[$x]));
	}
	
	$i = 0;

	
	?>
	
  <!-- container contain every comments(Worrylist, etc...) -->
  <div class="container">

    <div id="main" class="worry">
      <div class="box">
        <div class="content">
          <div class="shield">
            <form class="" action="write.php" method="post">
              <div class="plus" style="font-size:0.8em;margin-bottom:10px;">
                +
              </div>
              <div class="text">
                <textarea name="contents" rows="8" cols="80" style="width:100%;resize:none;text-align:center;border:none;font-family:'sd';font-size:0.8em;" placeholder="오늘의 고민을 적어볼까요??" required></textarea>

              </div>
              <input type="checkbox" name="IsShare" value="1" checked>
              <span style="font-size:1.2em;">24시간뒤 사라지게하기</span>
              <input type="checkbox" name="IsReply" value="1" checked>
              <span style="font-size:1.2em;">댓글금지</span>
              <button type="submit" name="button">새글 쓰기</button>
            </div>
            </form>

        </div>
      </div>

      <div class="box">
        <div class="content">
          <div class="shield">
            <img class="emoji_img" src="img/flower.jpg" alt="">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>

            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">

              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              <?php echo $WorryList[$i]; $i++;?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="main" class="story hide">
      <div class="box">
        <div class="content">
          <div class="shield">
            <form class="" action="index.html" method="post">
              <div class="plus" style="font-size:0.8em;margin-bottom:10px;">
                +
              </div>
              <div class="text">
                <textarea name="name" rows="8" cols="80" style="width:100%;resize:none;text-align:center;border:none;font-family:'sd';font-size:0.8em;" placeholder="오늘의 고민을 적어볼까요??"></textarea>

              </div>
              <input type="checkbox" name="" value="" checked>
              <span style="font-size:1.2em;">24시간뒤 사라지게하기</span>
              <input type="checkbox" name="" value="" checked>
              <span style="font-size:1.2em;">댓글금지</span>
              <button type="submit" name="button">새글 쓰기</button>
            </div>
            </form>

        </div>
      </div>

      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방dwadmxm xptmxm #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저fefptmxm #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구ffffff입니다. 안녕하세여

            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              asdasdsad리ㅓ뮤ㅏㄷ휴마ㅓㅈㄷ류마ㅓ조러ㅏㅈㅁㄷ로ㅠㄷㅁ자ㅓ
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 awdad친구입니다. 안녕하세여 xptmxm #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다.ㅈ요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. #알람 #행ㄹㄴ는 친구입니다. 안녕하세여 #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 ㅁㅇㅈㅇ 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저 xptmxm #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 xptmxm #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm # xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">

              안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm #알람 #행동 #가방안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. xptmxm #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm xptmxm
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- side bar CODE_NAME = MATE.css -->
  <div class="asidegroup close">
    <input id="matesearch" class="SearchBar_Mate" type="search" placeholder="메이트를 검색해 보세요" />

    <ul class="matelist" id="materesults">
    </ul>


    <div class="aside">
      M<br>
      A<br>
      T<br>
      E<br>

    </div>

  </div>

    <?php 
	for($idx = 0 ; $idx <8000; $idx++)
	{
		echo '<div id="fake'.$idx.'" style="display : none">'.$WorryList[$idx].'</div>';
	}

	?>

  
  <script src="js/login.js" charset="utf-8"></script>

  <script>
  //var tt = ["anagrams", "concatenation", "difference", "includes", "intersection", "remove", "array-sample", "array-union", "array-without", "array-zip", "average-of-array-of-numbers", "bottom-visible", "capitalize-first-letter-of-every-word", "capitalize-first-letter", "chain-asynchronous-functions", "check-for-palindrome", "chunk-array", "collatz-algorithm", "compact", "count-occurrences-of-a-value-in-array", "current-URL", "curry", "deep-flatten-array", "distance-between-two-points", "divisible-by-number", "drop-elements-in-array", "element-is-visible-in-viewport", "escape-regular-expression", "even-or-odd-number", "factorial", "fibonacci-array-generator", "fill-array", "filter-out-non-unique-values-in-an-array", "flatten-array-up-to-depth", "flatten-array", "get-days-difference-between-dates", "get-max-value-from-array", "get-min-value-from-array", "get-native-type-of-value", "get-scroll-position", "greatest-common-divisor-(GCD)", "group-by", "hamming-distance", "head-of-list", "hexcode-to-RGB", "initial-of-list", "initialize-array-with-range", "initialize-array-with-values", "is-array", "is-boolean", "is-function", "is-number", "is-string", "is-symbol", "last-of-list", "measure-time-taken-by-function", "median-of-array-of-numbers", "nth-element-of-array", "number-to-array-of-digits", "object-from-key-value-pairs", "object-to-key-value-pairs", "ordinal-suffix-of-number", "percentile", "pick", "pipe", "powerset", "promisify", "random-integer-in-range", "random-number-in-range", "redirect-to-URL", "reverse-a-string", "RGB-to-hexadecimal", "round-number-to-n-digits", "run-promises-in-series", "scroll-to-top", "shallow-clone-object", "shuffle-array", "similarity-between-arrays", "sleep", "sort-characters-in-string-(alphabetical)", "speech-synthesis-(experimental)", "standard-deviation", "sum-of-array-of-numbers", "swap-values-of-two-variables", "tail-of-list", "take-right", "take", "truncate-a-string", "unique-values-of-array", "URL-parameters", "UUID-generator", "validate-email", "validate-number", "value-or-default", "write-json-to-file"]

	function hell(){
		$('#fake0').remove();
	}
    var flag = true;
    var main;
	var arr = new Array();
	for(var i=20;i<8000;i++)	// DB에서 글불러오는 핵심 반복문 삭제금지
	{
	  
	
		  var fake = document.getElementById('fake'+i);

		  arr[i] = fake.innerHTML.replace(/(\n|\r\n)/g,'<br>');
		  $('#fake'+i).remove();

	  
	 }
	
      // var textxontent = $(".text").text();
      // console.log(textxontent);
      // var hash = location.hash = '알람';
      // //hash.style.color = 'yellow';
      // console.log(hash);
      //알람작업

    $(window).on('load', function() { i= 20;

      window.onresize = function() {
        location.reload();

      }

      waterFall();
      flag = false;
      // 여기서 한번불렀을떄 메인의 크기가 정해지는 데

      $(window).on('scroll', function() {
        
        if (checkScrollSlide()) {
        
            //var tt = " ＠*&#^$(*%&*(#$^*@^$＠*&#^$(*%&*(#$^*@^$＠*&#^$(*%&*(#$^*@^$＠*&#^$(*%&*(#$^*@^$＠*&#^$(*%&*(#$^*@^$＠*&#^$(*%&*(#$^*@^$#알람 #행동 #가방<br>안녕하세요 저는 서울사는 친구입니다.<br>안녕하세여<br> 안녕하세요 저는 서울사는 친구입니다.<br>안녕하세요 저는 서울사는 친구입니다.<br>안녕하세요 저는 서울사는 친구입니다.<br>안녕하세요 저는 서울사는 친구입니다.<br>안녕하세요 저는 서울사는 친구입니다.<br>xptmxm<br>";
            //var tt ="워터폴!!! 빠이어볼!!!!!!!!<빠직><빠직><빠직><빠직><빠직>#폭포를연구한다 #무한스크롤의무한속으로";

            //for(var i=0;i<24;i++){
              //console.log(tt[i]);
			  var tt = arr[i++];
              var oBox = $('<div>').addClass('box').appendTo($('#main'));
              var oPic = $('<div>').addClass('content').appendTo(oBox);
              var oshield = $('<div>').addClass('shield').appendTo(oPic);
              $('<img src="img/flower.jpg" alt="이미지">').addClass('emoji_img').appendTo(oshield);
              $('<div>').addClass('text').append(tt).appendTo(oshield);
              //$('<div>').addClass('reply').append("댓글").appendTo(oshield);
                waterFall();
            //}



            // 여기서 한번 더부르니까 메인의 크기가 작아짐 또는 커짐
        }
      });


    });


    function waterFall() {
		
      if(flag == true)
        main = $('#main').outerWidth();
      //console.log(main);
      var $boxs = $('#main>div');
      //console.log($boxs.outerWidth());
      //console.log($('#main').outerWidth());
      //var w = parseFloat($(document).outerWidth() * parseFloat('0.6') / parseInt('4')); //박스의 넓이를 계산
      if ($(window).width() > 1680)
        var cols = Math.floor('4'); //윈도우창 전체의 넓이에서 박스의 넓이를 나눔.
      else {
        if ($(window).width() > 1440)
          var cols = Math.floor('3'); //윈도우창 전체의 넓이에서 박스의 넓이를 나눔.
        else {
          if ($(window).width() > 1280)
            var cols = Math.floor('2'); //윈도우창 전체의 넓이에서 박스의 넓이를 나눔.
          else {
            if ($(window).width() > 1024)
              var cols = Math.floor('2'); //윈도우창 전체의 넓이에서 박스의 넓이를 나눔.
            else {
              if ($(window).width() > 810)
                var cols = Math.floor('1'); //윈도우창 전체의 넓이에서 박스의 넓이를 나눔.
              else {
                if ($(window).width() > 768)
                  var cols = Math.floor('1'); //윈도우창 전체의 넓이에서 박스의 넓이를 나눔.
                else {
                    var cols = Math.floor('1');
                  }
                }
              }
            }
          }
        }

    //  console.log($('#main').outerWidth());
      //$("#main").width().css('margin','0 auto');	//박스의 넓이랑 컬럼의 갯수를 생각해서 곱함.
      //메인 크기만듬 이제 컬럼 4개넣으면됨.
      //console.log(flag);


      //console.log(flag);

      $boxs.width(main* 0.96 / cols);
      //console.log($('#main').outerWidth());
      var boxwid = $boxs.outerWidth();
      //console.log(boxwid);
      //console.log(boxwid);
      var hArr = [];

      $boxs.each(function(index, value) {
        var h = $boxs.eq(index).outerHeight(); //각박스의 높이같음.
        if (index < cols) {
          hArr.push(h);
        } else {
          minH = Math.min.apply(null, hArr); // hArr안 배열의 최솟값
          //  console.log('배열의 값은 '+hArr+'minH is ='+ minH);
          var minHeightIndex = $.inArray(minH, hArr);
          //console.log()
          $(value).css({

            'position': 'absolute',
            'top': minH + 'px',
            'left': minHeightIndex * boxwid + 'px'

          });
          hArr[minHeightIndex] += $boxs.eq(index).outerHeight();
        }
      });
      //console.log(hArr);

    }

    function checkScrollSlide() {
      var $lastBox = $('.box').last();
      var lastBoxDis = $lastBox.offset().top + Math.floor($lastBox.outerHeight() / 2);
      var scrollTop = $(window).scrollTop();
      var documentH = $(window).height();
      return (lastBoxDis < scrollTop + documentH) ? true : false;

    }


  </script>
  <script src="js/worry_to_story.js" charset="utf-8"></script>
  <script src="js/reply.js" charset="utf-8"></script>
  <script type="text/javascript">
  // click_list css in vertical line
  $('.list_content').css("height",$('.click_list').outerHeight()/3);




  </script>


</body>

</html>
