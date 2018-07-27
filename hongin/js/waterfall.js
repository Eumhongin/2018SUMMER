var main;
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
  console.log("here!");
  $(window).on('scroll', function() {
    if (checkScrollSlide()) {
      console.log("scroll!");
          var oBox = $('<div>').addClass('box').appendTo($('#main'));
          var oPic = $('<div>').addClass('content').appendTo(oBox);
          $('.content').attr('onClick', 'get(this);');
          var oshield = $('<div>').addClass('shield').appendTo(oPic);
          $('<img src="img/flower.jpg" alt="이미지">').addClass('emoji_img').appendTo(oshield);
          $('<div>').addClass('text').append(tt[parseInt(Math.random()*10)]).appendTo(oshield);
            waterFall();
    }
  });


});


function waterFall() {
  if(flag == true)
    main = $('#main').outerWidth();
  var $boxs = $('#main>div');
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
  $boxs.width(main* 0.96 / cols);
  var boxwid = $boxs.outerWidth();
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
