function searchajax(){
	$("#searchword").keyup(function(){
		var words = $("#searchword").val();
		if(words != '')
		{
			
			$.ajax({
				type: 'POST',
				url:'../Lim/hashTag/TagCheck.php',
				data: {searchwords : words},
				dataType : 'json',
				success: function(result){
					if(result == null){ $("#results").html("");}
					else if(result.length> 0)
					{
						var str ='';
						for(var i =0; i<result.length; i++)
						{
							str += '<span>'+result[i]+ '</span><br/>';
							
						}
						$("#results").html(str);
						
					}
				},
				error: function(e) {console.log('error:' + e.status);}
			});
		}else {$("#results").html("");}
	});
}
