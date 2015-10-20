// JavaScript Document

$(document).ready(function() {
    
	$('#login_form').submit(function(){
		var dados = $(this).serialize();
		
		$.ajax({
			type: "POST",
			url: 'functions/funcInserir.php',
			data: dados,
			beforeSend:function(){
				$('#button').attr('disabled', 'disabled');
			},
			success: function(data){
				if(data == 1){
					window.location='questoes';
				}else if(data == 2){
					alert('Houve um problema com o registro');
				}else if(data == 3){
					alert('Nome já registrado');
				}
				$('#button').removeAttr('disabled');
			}
		});
		return false;
	});
});