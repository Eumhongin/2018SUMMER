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
  <!-- <link rel="stylesheet" href="css/Mate.css"> -->
  <link rel="stylesheet" href="css/reply.css">
  <script>

  // var aside = document.getElementsByClassName("aside");
  // var asidegroup = document.getElementsByClassName("asidegroup");
  // $(document).ready(function(){
  //   $('.reply').click(function(){
  //
  //     $('.reply_wrap').slideToggle("200");
  //
  //
  //     $('.reply_text').show();
  //
  //
  //
  //   });
  //
  //
  //   $('.asidegroup').css({"height":$(window).outerHeight()-$('header').outerHeight(),'top':$('header').outerHeight(),'right':-$('.asidegroup').outerWidth()});
  //
  //   $('.aside').on('click',function(){
  //     if(asidegroup[0].classList.contains("close"))
  //     {
  //       //alert($('.asidegroup').outerWidth());
  //       $('.asidegroup').animate({right:'0'},300);
  //       asidegroup[0].classList.remove("close");
  //       asidegroup[0].classList.add("open");
  //
  //     }
  //     else {
  //       $('.asidegroup').animate({right:-$('.asidegroup').outerWidth()},300);
  //       asidegroup[0].classList.add("close");
  //       asidegroup[0].classList.remove("open");
  //     }
  //
  //
  //   });
  // });


  </script>



</head>

<body>
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
  <div class="forlogin hide">

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
      <div class="Logo">
        나쁜기억지우개
      </div>
      <form class="SearchBar" action="index.html" method="post">
        <input type="text" name="" value="" placeholder="해시태그검색">
      </form>
      <div class="concern" onclick="click_worry();">
        고민
      </div>
      <!-- <div class="joke" onclick="click_story();">
        잡담
      </div> -->
      <div class="joke">
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

  </header>
    <?php 	
	include("..\module\dbConnect.php"); 
	include("..\module\dbContentsEcho.php"); 
	
	$currentTime = date("Y-m-d H:i:s");
	
	$WorryList = DB_echo('SELECT * FROM worryinfo WHERE ShareEndTime > "'.$currentTime.'" ORDER BY RegisterDate DESC limit 500','Content');
	$WL_count = $i;
	
	
	//$StoryList = DB_echo('SELECT * FROM storyinfo ORDER BY RegisterDate DESC limit 500','Content');
	$SL_count = $i;
	
	$i = 0;
	$j = 0;
	
	?>

  <!-- container contain every comments(Worrylist, etc...) -->
  <div class="container">

    <div id="main" class="worry">
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
            <img class="emoji_img" src="img/flower.jpg" alt="">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm xptmxm #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
            <div class="reply">
              댓글
            </div>
            <div class="reply_wrap">
              <div class="reply_text">
                굳ㅁㅇㅈㅇㅁㅇㅈㅇㅁㅇㅁㅈㅇㅁㅈㅇㅇㅈㅇ

              </div>
              <div class="reply_text">
                굳ㅁㅇㅈㅇㅁㅇㅈㅇㅁㅇㅁㅈㅇㅁㅈㅇㅇㅈㅇ

              </div>
              <div class="reply_text">
                굳ㅁㅇㅈㅇㅁㅇㅈㅇㅁㅇㅁㅈㅇㅁㅈㅇㅇㅈㅇ

              </div>
              <div class="reply_text">
                굳ㅁㅇㅈㅇㅁㅇㅈㅇㅁㅇㅁㅈㅇㅁㅈㅇㅇㅈㅇ

              </div>
              <div class="reply_text">
                굳ㅁㅇㅈㅇㅁㅇㅈㅇㅁㅇㅁㅈㅇㅁㅈㅇㅇㅈㅇ

              </div>
              <div class="reply_text">
                굳ㅁㅇㅈㅇㅁㅇㅈㅇㅁㅇㅁㅈㅇㅁㅈㅇㅇㅈㅇ

              </div>
              <div class="reply_text">
                굳ㅁㅇㅈㅇㅁㅇㅈㅇㅁㅇㅁㅈㅇㅁㅈㅇㅇㅈㅇ

              </div>
              <div class="reply_text">
                굳ㅁㅇㅈㅇㅁㅇㅈㅇㅁㅇㅁㅈㅇㅁㅈㅇㅇㅈㅇ

              </div>

            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm xptmxm #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여

            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              asdasdsad
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <div class="content">
          <div class="shield">
            <div class="text">
              #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. #알람 #행동 #가방 안녕하세요 저는 서울사는 친구입니다. 안녕하세여 xptmxm
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
    <!-- <div id="main" class="story hide">
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
    </div> -->
  </div>
	   	<?php 
	for($idx = 0 ; $idx < $WL_count; $idx++)
	{
		echo '<div id="fake'.$idx.'" style="display : none">'.$WorryList[$idx].'</div>';

	}

	?>

  <!-- side bar CODE_NAME = MATE.css -->
  <!-- <div class="asidegroup close">
    <input class="SearchBar_Mate" oninput="updateResult(this.value)" type="search" placeholder="메이트를 검색해 보세요" />

    <ul class="matelist">
    </ul>


    <div class="aside">
      M<br>
      A<br>
      T<br>
      E<br>

    </div>

  </div> -->

  <script src="js/login.js" charset="utf-8"></script>
  <!-- <script src="js/Mate.js" charset="utf-8"></script> -->
  <script>

    var flag = true;
    var main;
		var arr = new Array();
	for(var i=20;i<500;i++)	// DB에서 글불러오는 핵심 반복문 삭제금지
	{
	  var fake = document.getElementById('fake'+i);
		  arr[i] = fake.innerHTML.replace(/(\n|\r\n)/g,'<br>');
	/*  if(!(document.getElementsByClassName("worry")[0].classList.contains("hide"))&&document.getElementsByClassName('story')[0].classList.contains('hide'))
	  {
		  var fake = document.getElementById('fake'+i);
		  arr[i] = fake.innerHTML.replace(/(\n|\r\n)/g,'<br>');
	  }
	  else if(document.getElementsByClassName("worry")[0].classList.contains("hide")&&!(document.getElementsByClassName('story')[0].classList.contains('hide'))){
		  var fake = document.getElementById('dake'+i);
		  arr[i] = fake.innerHTML.replace(/(\n|\r\n)/g,'<br>');
	  }
	  else{
	  }*/
		
	 }
      // var textxontent = $(".text").text();
      // console.log(textxontent);
      // var hash = location.hash = '알람';
      // //hash.style.color = 'yellow';
      // console.log(hash);
      //알람작업

    $(window).on('load', function() {

      window.onresize = function() {
        location.reload();

      }

      waterFall();
      flag = false;
      // 여기서 한번불렀을떄 메인의 크기가 정해지는 데

      $(window).on('scroll', function() {
        if (checkScrollSlide()) {

            //var tt = " ＠*&#^$(*%&*(#$^*@^$＠*&#^$(*%&*(#$^*@^$＠*&#^$(*%&*(#$^*@^$＠*&#^$(*%&*(#$^*@^$＠*&#^$(*%&*(#$^*@^$＠*&#^$(*%&*(#$^*@^$#알람 #행동 #가방<br>안녕하세요 저는 서울사는 친구입니다.<br>안녕하세여<br> 안녕하세요 저는 서울사는 친구입니다.<br>안녕하세요 저는 서울사는 친구입니다.<br>안녕하세요 저는 서울사는 친구입니다.<br>안녕하세요 저는 서울사는 친구입니다.<br>안녕하세요 저는 서울사는 친구입니다.<br>xptmxm<br>";
            var tt ="워터폴!!! 빠이어볼!!!!!!!!<빠직><빠직><빠직><빠직><빠직>#폭포를연구한다 #무한스크롤의무한속으로";
            var oBox = $('<div>').addClass('box').appendTo($('#main'));
            var oPic = $('<div>').addClass('content').appendTo(oBox);
            var oshield = $('<div>').addClass('shield').appendTo(oPic);
            $('<img src="img/flower.jpg" alt="이미지">').addClass('emoji_img').appendTo(oshield);
            $('<div>').addClass('text').append(tt).appendTo(oshield);
            $('<div>').addClass('reply').append("댓글").appendTo(oshield);
            console.log("water fall 2!!");

            waterFall();
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
      //$("#main").width().css('margin','0 auto');   //박스의 넓이랑 컬럼의 갯수를 생각해서 곱함.
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
          minH = Math.min.apply(null, hArr); //Math안에있는 min안에 hArr안 배열의 최솟값
          //  console.log('배열의 값은 '+hArr+'minH is ='+ minH);
          var minHeightIndex = $.inArray(minH, hArr);
          console.log()
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


</body>

</html>