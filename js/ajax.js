// JavaScript Document

function questao(id){
	$.ajax({
		url: 'functions/end.php',
		success: function(data){
			if(data == 1){
				window.location = 'itens';
			}else{
				end(id);
			}
		}
	});
}

function end(id){
	$.ajax({
		type: 'POST',
		data: {id : id},
		url:  'functions/getQuest.php',
		success: function(data){
			$('#quest').html(data);
		}
	});
	$.ajax({
		type: 'POST',
		data: {id : id},
		url:  "functions/getItem1.php",
		success: function(data){
			$('#item1').html(data);
		}
	});
	$.ajax({
		type: 'POST',
		data: {id : id},
		url:  "functions/getItem2.php",
		success: function(data){
			$('#item2').html(data);
		}
	});
	$.ajax({
		type: 'POST',
		data: {id : id},
		url:  "functions/getItem3.php",
		success: function(data){
			$('#item3').html(data);
		}
	});
	$.ajax({
		type: 'POST',
		data: {id : id},
		url:  "functions/getItem4.php",
		success: function(data){
			$('#item4').html(data);
		}
	});
	$.ajax({
		type: 'POST',
		data: {id : id},
		url:  "functions/getDica.php",
		success: function(data){
			$('#textdica').html(data);
			tempo = 30;
			$("#timerest").html('30s');
			$('#yes').attr('alt', id);
		}
		
	});
	$.ajax({
		url: 'functions/rest.php',
		success: function(data){
			$('span#rest').html(data);
		}
	});
}

function veralt(iten, id){
	if(iten === 'item1'){
		iten = 1;
	}else if(iten === 'item2'){
		iten = 2;
	}else if(iten === 'item3'){
		iten = 3;
	}else if(iten === 'item4'){
		iten = 4;
	}
	$.ajax({
		type: 'POST',
		data: {iten : iten, id : id},
		url:  'functions/veralt.php',
		success: function(data){
			if(data == 2){
				$.ajax({
					type: 'POST',
					data: {status : 'erro'},
					url: 'functions/funcpont.php',
					success: function(data){
						$('span#parar').html(data);
						$('span#perde').html(data / 2);
					}
				});
				document.getElementById('erro_song').currentTime = 0;
				document.getElementById('erro_song').play();
			}else if(data == 1){
				$.ajax({
					type: 'POST',
					data: {status : 'acerto'},
					url: 'functions/funcpont.php',
					success: function(data){
						$('span#parar').html(data);
						$('span#perde').html(data / 2);
					}
				});
				document.getElementById('acert_song').currentTime = 0;
				document.getElementById('acert_song').play();
			}
			$.ajax({
				url: 'functions/money.php',
				success: function(data){
					$('span#premio').html(data);
				}
			});
			$('#win-modal').modal('hide');
			stoptime = false;
			startCountdown();
		}
	});
}

function norand(){
    id = Math.floor((Math.random()*20)+1);
    $.ajax({
        type: 'POST',
        data: {id : id},
        url: 'functions/norand.php',
        success: function (data) {
            questao(data);
        }
    });
}