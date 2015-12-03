// JavaScript Document

jQuery(document).ready(function() {
	$('#cert').hide();
	
	var loading = '<img src="imagens/ajax-loader (1).gif" alt="" class="center-block">';
	
	$('#stop').click(function(){
		$.ajax({
			url: 'functions/funcParar.php',
			beforeSend: function(){
				$('.modal-title').html('Cargando...');
				$('.modal-body').html(loading);
			},
			success: function(data){
				if(data == 1){
					window.location = 'itens';
				}
			}
		});
		return false;
	});
	
	$('.jump').click(function(){
		$('.modal-title').html('Cargando...');
		$('.modal-body').html(loading);
		$('.modal-footer').css('display','none');
		$('#win-modal').modal('show');
        norand();
		setTimeout("$('#win-modal').modal('hide')", 1000);
		$(this).attr('disabled', 'disabled');
		$(this).tooltip('destroy');
	});
	
	$('.alter').click(function(){
		var rel = $(this).attr('rel').valueOf();
		$('.alter').css('background-color','#FFF');
		$(this).css('background-color','green');
		$('#yes').attr('rel', rel);
		$('#neg').slideUp();
		$('#cert').slideDown();
	});
	
	$('#yes').click(function(){
		$('.modal-title').html('Cargando...');
		$('.modal-body').html(loading);
		$('.modal-footer').css('display','none');
		$('footer#dica').slideUp();
		$('#win-modal').modal('show');
		var rel = $(this).attr('rel').valueOf();
		var alt = $(this).attr('alt').valueOf();
		stoptime = true;
		veralt(rel, alt);
		norand();
		$('#neg').slideDown();
		$('#cert').slideUp();
	});
	
	$('#not').click(function(){
		$('.alter').css('background-color','#FFF');
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