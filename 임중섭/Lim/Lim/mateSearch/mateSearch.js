function mateSearchAjax(){
//<div class="Mate_identification row"><img class="Mate_img" src="img/flower.jpg" alt="img" style="width:40px;">
//<div class="Mate_Name">${algo}</div><img class="online_circle" src="img/statement.png" alt=""></div>
	function AJ(words){
		$.ajax({
				type: 'POST',
				url:'../Lim/mateSearch/mateList.php',
				data: {matesearch : words},
				dataType : 'json',
				success: function(result){			
					if(result == null){ $("#materesults").html("");}
					else if(result.length> 0)
					{
						var str =''
						for(var i =0; i<result[0].length; i++)
						{
							str += '<div class="Mate_identification row"><img class="Mate_img" src="../MemoryEraserCDN/UploadFiles/'+result[1][i]+'" alt="img" style="width:40px;"><div class="Mate_Name">'+result[0][i]+'</div></div>';
							//str += '<span class="Mate_identification row">'+result[i]+ '</span><br/>';
						}
						$("#materesults").html(str);
						
					}
				},
				error: function(e) {console.log('error:' + e.status);}
		});
	}
	
	
	$("#matesearch").keyup(function(){
			var words = $("#matesearch").val();
			if(words != '')
			{
				AJ(words);
				
			}else if(words == '')
			{
				AJ(words)
			}
		});
	
		if($("#matesearch").val() == null || $("#matesearch").val() == "")
		{
			var words = null;
			AJ(words)
		}
}
