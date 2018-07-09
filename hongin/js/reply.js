
$(document).ready(function(){

  $('.box').on('click',function(){
    document.getElementsByClassName("forlogin")[0].classList.remove("hide");
    document.getElementsByClassName("click_list")[0].classList.remove("hide");
    $('.forlogin').animate({opacity:'1'},300);
    $('.click_list').animate({opacity:'1'},300);
  });
  $(document).keyup(function(e) {
    //if (e.keyCode === 13) $('.save').click();     // enter
    if (e.keyCode === 27&&!(document.getElementsByClassName("forlogin")[0].classList.contains("hide")))
    {
        document.getElementsByClassName("forlogin")[0].classList.add("hide");
        document.getElementsByClassName("click_list")[0].classList.add("hide");
        $('.forlogin').css("opacity","0");
        $('.click_list').css("opacity","0");
    }

  });
  $('.forlogin').on('click',function(){
    document.getElementsByClassName("forlogin")[0].classList.add("hide");
    document.getElementsByClassName("click_list")[0].classList.add("hide");
    $('.forlogin').css("opacity","0");
    $('.click_list').css("opacity","0");


  });


});
