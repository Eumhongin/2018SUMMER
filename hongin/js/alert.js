var flag = true;
$(document).keyup(function(e) {     //if (e.keyCode === 13) $('.save').click();     // enter
  if (e.keyCode === 27&&!(document.getElementsByClassName("alertpop")[0].classList.contains("hide")))
  {
    $('.alertpop').attr({"class":"alertpop hide"});
  }
});
$('.alarm').on('click',function(){
  if(document.getElementsByClassName("alertpop")[0].classList.contains("hide"))
  {
    $('.alertpop').attr({"class":"alertpop"});
  }
  else{
    $('.alertpop').attr({"class":"alertpop hide"});

  }
});
$('.asidegroup  *').on('click',function(){
    $('.alertpop').attr({"class":"alertpop hide"});
});
$('.box  *').on('click',function(){
    $('.alertpop').attr({"class":"alertpop hide"});
});
$('.SearchBar').on('click',function(){
    $('.alertpop').attr({"class":"alertpop hide"});
});
$('.login').on('click',function(){
    $('.alertpop').attr({"class":"alertpop hide"});
});

$('.joke').on('click',function(){
    $('.alertpop').attr({"class":"alertpop hide"});
});

$('.concern').on('click',function(){
    $('.alertpop').attr({"class":"alertpop hide"});
});
