

//It is called after document is ready for display
$(document).ready(function(){
	$("select").change(function(){
		var selectedCityName=$(this).val(); //To store selected city name
		$.ajax({
				url:"showResult",
				dataType:"html",
				type:"GET",
				data:{"selectedCityName":selectedCityName},
				success:function(data){
					$("#result").html(data);
					$("#result").fadeIn();
				},
				error:function(error){

					alert(error);
				}
		});

});

	//Clearing the content on click on clear button
	$("#button").click(function(){
		$("#result").fadeOut();
	});
});
       	

