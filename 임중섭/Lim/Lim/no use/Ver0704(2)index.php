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



</head>

<body>
  <!-- login fade out link by login.js-->
  <div class="forlogin hide">
    <form class="loginpop" action="index.html" method="post">
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
  <header class="row">
    <div class="container">
      <div class="Logo">
        나쁜기억지우개
      </div>
      <form class="SearchBar" action="index.html" method="post">
        <input type="text" name="" value="" placeholder="해시태그검색">
      </form>

      <div class="joke">
        잡답
      </div>
      <div class="concern">
        고민
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
	include("module\dbConnect.php"); 
	include("module\dbContentsEcho.php"); 
	
	$currentTime = date("Y-m-d H:i:s");
	
	$WorryList = DB_echo('SELECT * FROM worryinfo WHERE ShareEndTime > "'.$currentTime.'" ORDER BY RegisterDate DESC','Content');
	$WL_count = $i;
	$i = 0;
	?>
  
  <!-- container contain every comments(Worrylist, etc...) -->
  <div class="container">
  
  <div id="main">
      <div class="box">
        <div class="content">
          <div class="shield">
            <form class="" action="write.php" method="post">
              <div class="plus" style="font-size:0.8em;margin-bottom:10px;">
                +
              </div>
              <div class="text">
                <textarea id="ar" name="contents" rows="8" cols="80" style="width:100%;resize:none;text-align:center;border:none;font-family:'sd';font-size:0.8em;" placeholder="오늘의 고민을 적어볼까요??"></textarea>

              </div>
              <input type="checkbox" name="IsShare" value="1" checked>
              <span style="font-size:1.2em;">24시간뒤 사라지게하기</span>
              <input type="checkbox" name="IsReply" value="1" checked>
              <span style="font-size:1.2em;">댓글받기</span>
              <button type="submit" name="button" onclick="ar()">새글 쓰기</button>
            </div>
            </form>

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

  </div>


  <!-- side bar CODE_NAME = MATE.css -->
  <div class="asidegroup">
    <input class="SearchBar_Mate" type="text" name="" value="">
    <div class="matelist">
      <img class="Mate_img" src="" alt="">
      <span class="Mate_Name"></span>
      <div class="online_circle">

      </div>
    </div>

    <div class="aside">
      M<br>
      A<br>
      T<br>
      E<br>

    </div>

  </div>

  	<?php 
	for($idx = 0 ; $idx < $WL_count; $idx++)
	{
		echo '<div id="fake'.$idx.'" style="display : none">'.$WorryList[$idx].'</div>';
	}

	?>
  
  
  <script src="js/login.js" charset="utf-8"></script>
  <script>
    // var textxontent = $(".text").text();
    // console.log(textxontent);
    // var hash = location.hash = '알람';
    // //hash.style.color = 'yellow';
    // console.log(hash);

    //알람작업
	
	var arr = new Array();
	for(var i=20;i<8000;i++)	// DB에서 글불러오는 핵심 반복문 삭제금지
	{
	  var fake = document.getElementById('fake'+i);
	   
	  arr[i] = fake.innerHTML.replace(/(\n|\r\n)/g,'<br>');
	 }

	 
    $(window).on('load', function() { i =20;
      window.onresize = function() {
        location.reload();
      }
      waterFall();

      $(window).on('scroll', function() {
        if (checkScrollSlide()) {

            var tt = arr[i++];
            var oBox = $('<div>').addClass('box').appendTo($('#main'));
            var oPic = $('<div>').addClass('content').appendTo(oBox);
            var oshield = $('<div>').addClass('shield').appendTo(oPic);
            $('<div>').addClass('text1').append(tt).appendTo(oshield);

          waterFall();
        }
      });
    });

    function waterFall() {
      var $boxs = $('#main>div');

      //alert($(document).outerWidth());
      var w = parseFloat($(document).outerWidth() * parseFloat('0.6') / parseInt('4')); //박스의 넓이를 계산

      //alert(w);
      if ($(window).width() > 1024)
        var cols = Math.floor('4'); //윈도우창 전체의 넓이에서 박스의 넓이를 나눔.
      else {
        var cols = Math.floor('3');
      }
      //$("#main").width().css('margin','0 auto');	//박스의 넓이랑 컬럼의 갯수를 생각해서 곱함.
      //메인 크기만듬 이제 컬럼 4개넣으면됨.
      $boxs.width($('#main').outerWidth() * 0.9 / cols);
      var boxwid = $boxs.outerWidth();



      //var w=$('.container').outerWidth();
      //alert(w);
      //var res = parseInt("4");
      //var w = $('.container').outerWidth()/res;
      //var cols=parseInt('5');
      //  console.log(res);
      //  console.log(w);
      //console.log('cols = '+cols);

      //alert($(window).width());
      //	alert($(window).width());
      //$("#main").width(cols).css('margin','0 auto');	//메인박스 크기구하는거 스타일까지 세팅끝

      //$(".box").width($('.container').width()/cols);


      var hArr = [];

      $boxs.each(function(index, value) {

        var h = $boxs.eq(index).outerHeight(); //각박스의 높이같음.
        //console.log(index);
        //console.log(h);
        //alert(h);

        if (index < cols) {
          //  console.log(cols);
          hArr.push(h);
          //  console.log(hArr.length);
        } else {
          minH = Math.min.apply(null, hArr); //Math안에있는 min안에 hArr안 배열의 최솟값
          //  console.log('배열의 값은 '+hArr+'minH is ='+ minH);
          //  console.log(minH);
          var minHeightIndex = $.inArray(minH, hArr);

          //  console.log(value)
          //  console.log(minHeightIndex);
          //  console.log(boxwid);
          //  console.log(minHeightIndex*boxwid);
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
</body>

</html>
