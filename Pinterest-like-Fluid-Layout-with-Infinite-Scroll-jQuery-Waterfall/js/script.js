$(window).on('load',function(){
	waterFall();
	var dataInt={"data":[{"src":"0.jpg"},{"src":"1.jpg"},{"src":"2.jpg"},{"src":"3.jpg"}]};
	$(window).on('scroll',function(){
		if(checkScrollSlide()){
			$.each(dataInt.data,function(key,value){
				var tt = " #알람 #행동 #가방<br>안녕하세요 저는 서울사는 친구입니다.<br>안녕하세여<br> 안녕하세요 저는 서울사는 친구입니다.<br>안녕하세요 저는 서울사는 친구입니다.<br>안녕하세요 저는 서울사는 친구입니다.<br>안녕하세요 저는 서울사는 친구입니다.<br>안녕하세요 저는 서울사는 친구입니다.<br>xptmxm<br>";
				var oBox=$('<div>').addClass('box').appendTo($('#main'));
				var oPic=$('<div>').addClass('content').appendTo(oBox);
				$('<div>').append(tt).appendTo(oPic);
			});
			waterFall();
		}
	});
});

function waterFall() {
	var $boxs=$('#main>div');

	var w=$boxs.eq(0).outerWidth();
	//alert(w);
	var cols=Math.floor($(window).width()/w);
//	alert($(window).width());
	$("#main").width(w*cols).css('margin','0 auto');	//메인박스 크기구하는거 스타일까지 세팅끝
	var hArr=[];
	$boxs.each(function(index,value){
	//	console.log(index);
		var h=$boxs.eq(index).outerHeight();		//각박스의 높이같음.

		if(index<cols){
			hArr.push(h);
		}else {
			minH=Math.min.apply(null,hArr);
			var minHeightIndex=$.inArray(minH,hArr);
			// console.log(value);
			$(value).css({

				'position':'absolute',
				'top':minH+'px',
				'left':minHeightIndex*w+'px',
				'font-size':'1.8em',
				'font-family': 'SD'
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