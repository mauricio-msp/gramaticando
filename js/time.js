// JavaScript Document

var tempo = new Number();
	tempo = 30;
	 
	function startCountdown(){
	 
	    if((tempo - 1) >= 0){
	        var seg = tempo%60;
	 
	        if(seg <=9){
	            seg = "0"+seg;
	        }
	 
	        horaImprimivel = seg+"s";
	        $("#timerest").html(horaImprimivel);
	 
	        setTimeout('startCountdown()',1000);
	 
	        tempo--;
	 
	    } else {
	        
	    }
	 
	}
	