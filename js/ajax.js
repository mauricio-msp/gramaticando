// JavaScript Document

function questao(id){
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
			if(stoptime === true){
				stoptime = false;
				startCountdown();
			}
		}
		
	});
}

function veralt(iten){
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
		data: {iten: iten},
		url:  'functions/veralt.php',
		success: function(){
			
		}
	});
}