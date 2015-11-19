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
		$('#neg').css('display','none');
		$('#cert').css('display','block');
	});
	
	$('#not').click(function(){
		$('#neg').css('display','block');
		$('#cert').css('display','none');
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