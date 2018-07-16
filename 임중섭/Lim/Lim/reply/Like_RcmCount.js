function gets(){
$("#one1").click(function(){
	//alert(content);
	
	var chk = $("#one1").text();
			alert(chk);
		$.ajax({
			type:'POST',
			url:'../Lim/reply/replyView.php',
			data:{cont:chk},
			dataType: 'text',
			success: function(result){alert(result);
				if(result == null){ console.log("NULLa");}
				else if(result.length >0)
				{
				for(var i =0; i < result.length; i++)
					{
						result[i];
						//console.log(result1[i]+"\n");
					}
					console.log(result);
				}
				/*if(result == null){ $("#content_text").html("");}
				else if(result.length>0)
				{
					var str ='';
					for(var z = 0 ; z < result.length; z++)
					{
						str += '<span>'+result[z]+'</span>';
					}
					$("#content_text").html(str);
				}*/
				console.log("plz..");
			},
			error:function(request,status,error){
        alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
       }
		});
});
}