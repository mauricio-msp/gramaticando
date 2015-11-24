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
		$('#neg').slideUp();
		$('#cert').slideDown();
	});
	
	$('#not').click(function(){
		$('#neg').slideDown();
		$('#cert').slideUp();
		if(stoptime === true){
			stoptime = false;
			startCountdown();
		}
	});
	
	$('#yes').click(function(){
		stoptime = true;
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