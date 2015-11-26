// JavaScript Document

jQuery(document).ready(function() {
	$('#cert').hide();
	
	var loading = '<img src="imagens/ajax-loader (1).gif" alt="" class="center-block">';
	
	$('#stop').click(function(){
		$.ajax({
			url: 'functions/funcParar.php',
			beforeSend: function(){
				
			},
			success: function(data){
				if(data == 1){
					window.location = 'login';
				}
			}
		});
		return false;
	});
	
	$('.jump').click(function(){
		questao(Math.floor((Math.random() * 20) + 1));
		$(this).attr('disabled', 'disabled');
		$(this).tooltip('destroy');
	});
	
	$('.alter').click(function(){
		var rel = $(this).attr('rel').valueOf();
		$('#yes').attr('rel', rel);
		$('#neg').slideUp();
		$('#cert').slideDown();
	});
	
	$('#yes').click(function(){
		$('.modal-title').html('Cargando...');
		$('.modal-body').html(loading);
		$('footer#dica').slideUp();
		$('#win-modal').modal('show');
		var rel = $(this).attr('rel').valueOf();
		var alt = $(this).attr('alt').valueOf();
		stoptime = true;
		questao(Math.floor((Math.random() * 20) + 1));
		$('#neg').slideDown();
		$('#cert').slideUp();
		veralt(rel, alt);
	});
	
	$('#not').click(function(){
		$('#neg').slideDown();
		$('#cert').slideUp();
		if(stoptime === true){
			stoptime = false;
			startCountdown();
		}
	});
	
	$('.help').click(function(){
		$(this).attr('disabled', 'disabled');
		$(this).tooltip('destroy');
	});
	
});