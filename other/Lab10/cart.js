$(function() {
    $("#AddToCartForm").on('submit', function(event){
		event.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type : 'POST',
			dataType: "json",	
			url : 'action.php',	
			data : formData,
			success:function(response){
				if(response.success == 1) {
					alert("Da them vao cart");
				}
			},
            error:function(data){
                alert(JSON.stringify(data));
            }
		});		
	});

    $("form[name*='DeleteCartForm']").on('submit', function(event){
		event.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type : 'POST',
			dataType: "json",	
			url : 'action.php',	
			data : formData,
			success:function(response){
				if(response.success == 1) {
					window.location.reload();
				}
			},
            error:function(data){
                alert(JSON.stringify(data));
            }
		});		
	});
});