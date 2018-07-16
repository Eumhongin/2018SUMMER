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

</head>

<body>
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
	
	$WorryList = DB_echo('SELECT * FROM worryinfo ORDER BY RegisterDate DESC','Content');
	$WL_count = $i;
	$i = 0;


	?>

  <!-- container -->
  <div class="container">
    <div id="main">
	
	
	
      <div class="box">
        <div class="content">
          <div class="shield">
			<div class="text">			
				<?php echo $WorryList[$i++];?>
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
            <div class="text" style="overflow-wrap:break-word;">
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

  <!-- side bar CODE_NAME = MATE -->
  <div class="asidegroup">
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
	//$string = "              hello fuck           ";
//	echo '<textarea id="hello">'.trim($string).'</textarea>';
	?>
	
  <script>
  var ff = document.getElementsByClassName('text');
  //console.log('THis is test for php'+ff.value);
  alert(ff[1].innerHTML);
  ff[1].innerHTML.replace(/!/g,"B");
	   
	   var arr = new Array();
	   for(var i=20;i<423;i++){
		   var fake = document.getElementById('fake'+i);
		   
		   arr[i] = fake.innerHTML.replace(/(\n|\r\n)/g,'<br>');

		   console.log(arr[i]);
	   }
	  


    // var textxontent = $(".text").text();
    // console.log(textxontent);
    // var hash = location.hash = '알람';
    // //hash.style.color = 'yellow';
    // console.log(hash);

    //알람작업
	var tt; 
	var aa=0;
    $(window).on('load', function() { i = 20;
      window.onresize = function() {
        location.reload();
      }
	  
      waterFall();
	  
      var dataInt = {
        "data": [{
          "src": "0.jpg"
        }, {
          "src": "1.jpg"
        }, {
          "src": "2.jpg"
        }, {
          "src": "3.jpg"
        }]
      };

      $(window).on('scroll', function() {
        if (checkScrollSlide()) {
          $.each(dataInt.data, function() {
			var tt = arr[i++];			
            var oBox = $('<div>').addClass('box').appendTo($('#main'));
            var oPic = $('<div>').addClass('content').appendTo(oBox);
            var oshield = $('<div>').addClass('shield').appendTo(oPic);
            $('<div>').addClass('text1').append(tt).appendTo(oshield);
          });
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
            'left': minHeightIndex * boxwid + 'px',
			'word-break':'break-all'

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
