function resizing(e){
  alert(e);
  $('.content_left').css({'max-height':parseFloat($('.click_list_content').outerHeight())*parseFloat(0.4)});
  $('.content_right').css({'max-height':parseFloat($('.click_list_content').outerHeight())*parseFloat(0.4)});

}
