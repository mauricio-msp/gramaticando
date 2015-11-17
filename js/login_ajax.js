// JavaScript Document

$(document).ready(function(){
	$('#playGame').click(function(){
		var input = $('#Nome').serialize();
		if(input === "" || input === " "){
			alert('Preencha o campo');
		}else{
			$.ajax({
				type: "Post",
				data: input,
				url: "functions/funcInserir.php",
				beforeSend: function () {
					
				},
				success: function (data) {
					if(data === 1){
						
					}else if(data === 2){
						
					}else if(data === 3){
						
					}
				}
			});
		}
		return false;
	});
});