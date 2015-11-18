// JavaScript Document

jQuery(document).ready(function(){
	$('#form').submit(function(){
		var input = $(this).serialize();
		if(input === "" || input === " "){
			alert('Preencha o campo');
		}else{
			$.ajax({
				type: "Post",
				data: input,
				url: "functions/funcInserir.php",
				beforeSend: function () {
					$('#playGame').attr('disabled', 'disabled');
				},
				success: function (data) {
					if(data == 1){
						window.location = 'questoes';
					}else if(data == 2){
						alert('Erro ao cadastrar nome');
					}else if(data == 3){
						alert('Dados não enviados');
					}else if(data == 4){
						alert('Nome já cadastrado');
					}
					$('#playGame').removeAttr('disabled');
				}
			});
		}
		return false;
	});
});