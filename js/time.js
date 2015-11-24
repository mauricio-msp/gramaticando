// JavaScript Document

var tempo = new Number();
	tempo = 30;
	var stoptime = false;
	 
	function startCountdown(){
	    if((tempo - 0) >= 0){
	        var seg = tempo%60;
	 
	        if(seg <=9){
	            seg = "0"+seg;
	        }
	 
	        horaImprimivel = seg+"s";
	        $("#timerest").html(horaImprimivel);
	 
	        if(stoptime === false){
                    setTimeout('startCountdown()',1000);
                    tempo--;
                }
	 	 
	    } else {
                $('.modal-body').html('Tempo esgotado');
                stoptime = true;
	        questao(Math.floor((Math.random() * 14) + 1));
                $('#win-modal').modal('show');
	    }
	 
	}
	