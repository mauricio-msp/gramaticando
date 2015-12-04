// JavaScript Document

jQuery(document).ready(function() {
	$('#cert').hide();
	$('.buy-jump').hide();
	$('.buy-help').hide();
	
	var loading = '<figure id="loading"><img src="imagens/ajax-loader (1).gif" alt="" class="center-block"></figure>';
	
	$('#stop').click(function(){
		$.ajax({
			url: 'functions/funcParar.php',
			beforeSend: function(){
				$('.alter').css('background-color','#FFF');
				$('.modal-title').html('Cargando...');
				$('.modal-body').html(loading);
				$('#exit').css('display', 'none');
				$('.modal-footer').css('display','none');
				$('#win-modal').modal('show');
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
		$('.alter').css('background-color','#FFF');
		$('.modal-title').html('Cargando...');
		$('.modal-body').html(loading);
		$('#exit').css('display', 'none');
		$('.modal-footer').css('display','none');
		$('#win-modal').modal('show');
		$('footer#dica').slideUp();
        norand();
		setTimeout("$('#win-modal').modal('hide')", 1000);
		$('#exit').css('display', 'block');
		if($(this).attr('id').valueOf() == 'jump-onej'){
			$('#jump-one').fadeIn(500);
		}else if($(this).attr('id').valueOf() == 'jump-twoj'){
			$('#jump-two').fadeIn(500);
		}else if($(this).attr('id').valueOf() == 'jump-threej'){
			$('#jump-three').fadeIn(500);
		}
		$(this).attr('disabled', 'disabled');
		$(this).tooltip('destroy');
	});
	
	$('.alter').click(function(){
		var rel = $(this).attr('rel').valueOf();
		$('.alter').css('background-color','#FFF');
		$(this).css('background-color','#87CEEB');
		$('#yes').attr('rel', rel);
		$('#neg').slideUp();
		$('#cert').slideDown();
	});
	
	$('#yes').click(function(){
		$('.alter').css('background-color','#FFF');
		$('.modal-title').html('Cargando...');
		$('.modal-body').html(loading);
		$('.modal-footer').css('display','none');
		$('#exit').css('display', 'none');
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
		$('.buy-help').fadeIn(500);
	});
	
	$('.buy-help').click(function(){
		$.ajax({
			type: 'POST',
			data: {val : 10},
			url: 'functions/buy.php',
			beforeSend: function(){
				stoptime = true;
				$('.modal-title').html('Cargando...');
				$('.modal-body').html(loading);
				$('#exit').css('display', 'none');
				$('.modal-footer').css('display','none');
				$('#win-modal').modal('show');
			},
			success: function(data){
				if(data == 1){
					document.getElementById('buy_song').currentTime = 0;
					document.getElementById('buy_song').play();
					$('.help').removeAttr('disabled');
					$('.buy-help').fadeOut(500);
					$('#win-modal').modal('hide');
					$('#exit').css('display', 'block');
					$.ajax({
						url: 'functions/money.php',
						success: function(data){
							$('span#premio').html(data);
							$('#win-modal').modal('hide');
							stoptime = false;
							startCountdown();
						}
					});
				}else if(data == 2){
					$('.modal-title').html('¡Advertencia!');
					$('.modal-body').html('usted no tiene suficiente dinero para comprar este artículo.');
				}
			}
		});
	});
	
	$('.buy-jump').click(function(){
		var id = '#' + $(this).attr('id').valueOf();
		$.ajax({
			type: 'POST',
			data: {val : 5},
			url: 'functions/buy.php',
			beforeSend: function(){
				stoptime = true;
				$('.modal-title').html('Cargando...');
				$('.modal-body').html(loading);
				$('#exit').css('display', 'none');
				$('.modal-footer').css('display','none');
				$('#win-modal').modal('show');
			},
			success: function(data){
				if(data == 1){
					document.getElementById('buy_song').currentTime = 0;
					document.getElementById('buy_song').play();
					$(id).fadeOut(500);
					$(id + 'j').removeAttr('disabled');
					$.ajax({
						url: 'functions/money.php',
						success: function(data){
							$('span#premio').html(data);
							$('#win-modal').modal('hide');
							$('#exit').css('display', 'block');
							stoptime = false;
							startCountdown();
						}
					});
				}else{
					$('.modal-title').html('¡Advertencia!');
					$('.modal-body').html('usted no tiene suficiente dinero para comprar este artículo.');
				}
			}
		});
		
	});
	
});