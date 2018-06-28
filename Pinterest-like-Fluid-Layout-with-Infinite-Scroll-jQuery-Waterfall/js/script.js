$(window).on('load',function(){
	waterFall();
	var dataInt={"data":[{"src":"0.jpg"},{"src":"1.jpg"},{"src":"2.jpg"},{"src":"3.jpg"}]};
	$(window).on('scroll',function(){
		if(checkScrollSlide()){
			$.each(dataInt.data,function(key,value){
				var oBox=$('<div>').addClass('box').appendTo($('#main'));
				var oPic=$('<div>').addClass('content').appendTo(oBox);
				$('<img>').attr('src','images/'+$(value).attr('src')).appendTo(oPic);
			});
			waterFall();
		}
	});
});

function waterFall() {
	var $boxs=$('#main>div');
	var w=$boxs.eq(0).outerWidth();
	alert(w);
	var cols=Math.floor($(window).width()/w);
	alert($(window).width());
	$("#main").width(w*cols).css('margin','0 auto');	//메인박스 크기구하는거
	var hArr=[];
	$boxs.each(function(index,value){
		var h=$boxs.eq(index).outerHeight();
		if(index<cols){
			hArr.push(h);
		}else {
			minH=Math.min.apply(null,hArr);
			var minHeightIndex=$.inArray(minH,hArr);
			// console.log(value);
			$(value).css({
				'position':'absolute',
				'top':minH+'px',
				'left':minHeightIndex*w+'px'
			});
			hArr[minHeightIndex]+=$boxs.eq(index).outerHeight();
		}
	});
	// console.log(hArr);
}

function checkScrollSlide() {
	var $lastBox=$('#main>div').last();
	var lastBoxDis=$lastBox.offset().top+Math.floor($lastBox.outerHeight()/2);
	var scrollTop=$(window).scrollTop();
	var documentH=$(window).height();
	return (lastBoxDis<scrollTop+documentH)?true:false;

}
