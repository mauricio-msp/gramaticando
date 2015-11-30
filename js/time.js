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
                $('.modal-title').html('Fin de su tiempo.');
                $('.modal-body').html('<center><span class="glyphicon glyphicon-time" style="font-size:250pt;color:#006699;"></span><center>');
                $('.modal-footer').css('display','none');
                stoptime = true;
                $('#win-modal').modal('show');
	        norand();
	    }
	 
	}
	