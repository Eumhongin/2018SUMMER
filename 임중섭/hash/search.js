function searchajax(){
	$("#searchword").keyup(function(){
		var words = $("#searchword").val();
		console.log(words);
		if(words != '')
		{
			
			$.ajax({
				type: 'POST',
				url:'TagCheck.php',
				data: {searchwords : words},
				dataType : 'json',
				success: function(result){			
					if(result.length> 0)
					{
						console.log(result.length);
						var str =''
						for(var i =0; i<result.length; i++)
						{
							str += '<span>'+result[i]+ '</span><br/>';
						}
						$("#results").html(str);
						
					}else { $("#results").html("");}
				},
				error: function(e) {console.log('error:' + e.status);}
		});
	}else {$("#results").html("");}
	});
}