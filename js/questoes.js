// JavaScript Document

jQuery(document).ready(function() {
	$('#cert').hide();
	
	$('#stop').click(function(){
		$.ajax({
			url: 'functions/funcParar.php',
			beforeSend: function(){
				
			},
			success: function(data){
				if(data == 1){
					window.location='login';
				}
			}
		});
		return false;
	});
	
	$('.alter').click(function(){
		var rel = $(this).attr('rel').valueOf();
		$('#neg').hide(500);
		$('#cert').show(500);
	});
	
	$('#not').click(function(){
		$('#neg').show(500);
		$('#cert').hide(500);
	});
	
	$('#yes').click(function(){
		
	});
	
	$('.jump').click(function(){
		
		$(this).attr('disabled', 'disabled');
		$(this).tooltip('destroy');
	});
	
	$('.help').click(function(){
		$(this).attr('disabled', 'disabled');
		$(this).tooltip('destroy');
	});
	
	
});