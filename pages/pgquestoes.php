<div hidden="true">
	<?php
    	
		require_once 'Classes/DAO/conexao.php';
		session_start();
		if(isset($_SESSION['user_gram'])):
			$user = Users::find($_SESSION['user_gram']);
			if(count($user) <= 0):
				echo '<script>alert("Pagina fora de validação");window.location=\'login\'</script>';
				die();
			endif;
		else:
			echo '<script>alert("Pagina fora de validação");window.location=\'login\'</script>';
			die();
		endif;
		
		unset($_SESSION['rand']);
		$_SESSION['rand'] = '';
		$_SESSION['qrand'] = 0;
		
	?>
</div>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Desafio - Gramaticando</title>
        <!--CSS Bootstrap 3.3.5 -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/questoes.css" />
        <!--JS Bootstrap 3.3.5 -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/questoes.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/time.js"></script>
        <script src="js/ajax.js"></script>
        <script>
            $(document).ready(function() {
                id = Math.floor((Math.random() * 20) + 1);
                    $.ajax({
                        type: 'POST',
                        data: {id : id},
                        url:  'functions/norand.php',
                        success: function(data){
                            questao(data);
                        }
                    });
            });
        </script>
        
        <!-- Impedir Atualização -->
        <script>
            function Verificar(){
                var button = window.event.keyCode;
                if (button === 116) {
                    alert("ERROR! : Proibido atualizar página"); 
                    event.keyCode = 0;
                    event.returnValue=false;
                }
            }
        </script>
    </head>
    <body onKeyDown="Verificar();">
        
        <div id="mask-invible"></div>
        
        <!-- Cabeçalho da Pergunta -->
        <header id="question" class="jumbotron">
            <br/>
            <p id="quest" class="text-center"></p>
        </header>
        
        <div id="time">
            <p id="timerest">30s</p>
        </div> 
        
        <!-- Area das estatísticas -->
        <aside id="static-left" class="jumbotron">
            <h2> Estadísticas </h2>
            
            <nav id="dados">
                <ul class="nav nav-pills nav-stacked">
                    <li class="well">
                        <a href="#"> 
                            <p>Dinero R$ <span id="premio">0</span> </p>
                            <p>Puntuacion <span id="parar">0 pts</span> </p>
                            <p>Deténgase <span id="perde">0 pts</span> </p>
                        </a>
                    </li>
                    <li class="well">
                        <a href="#"> 
                            <span style="text-transform: uppercase">
                                Jugador
                            </span> <br/>
                            <span style="font-size: 12pt;margin-right: 50px;color: #333;">
                                &rsaquo;&rsaquo;<?php echo $user->nome; ?>
                            </span> 
                        </a>
                    </li>
                     <li class="well">
                        <a href="#"> 
                            <span style="text-transform: uppercase;">Faltan</span> <br/>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        
        <section id="itens">
            <nav id="alernativas">
                <ul class="pager">
                  <li><a href="javascript:void();" rel="item1" id="item1" class="alter"></a></li> <br/><br/>
                  <li><a href="javascript:void();" rel="item2" id="item2" class="alter"></a></li> <br/><br/>
                  <li><a href="javascript:void();" rel="item3" id="item3" class="alter"></a></li> <br/><br/>
                  <li><a href="javascript:void();" rel="item4" id="item4" class="alter"></a></li> <br/><br/>
                </ul>
                <ul class="pager" id="cert">
                        <li><p class="quest">¿Estás seguro?</p></li>
                	<li><a href="javascript:void();" id="yes">Sí</a></li>
                	<li><a href="javascript:void();" id="not">No</a></li>
                </ul> <br/>
                <ul class="pager" id="neg">
                  <li>
                      <a href="javascript:void();" id="stop">
                          <span class="glyphicon glyphicon-thumbs-down"></span>&nbsp;Deténgase
                      </a>
                  </li> 
                </ul>
            </nav>
        </section>
        
        <!-- Area da Ajuda -->
        
        <aside id="help-right" class="jumbotron">
            <h2> Ayuda </h2>
            
            <nav>
                <ul class="pager well">
                    <li data-toggle="tooltip" title="Omitir" data-placement="left">
                        <button class="jump btn btn-default" id="jump-one">
                            <span class="glyphicon glyphicon-share-alt jumper-I"></span>
                        </button>
                    </li> <br><br>
                    <li data-toggle="tooltip" title="Omitir" data-placement="left">
                        <button class="jump btn btn-default" id="jump-two">
                            <span class="glyphicon glyphicon-share-alt jumper-II"></span>
                        </button>
                    </li> <br><br>
                    <li data-toggle="tooltip" title="Omitir" data-placement="left">
                        <button class="jump btn btn-default" id="jump-three">
                            <span class="glyphicon glyphicon-share-alt jumper-III"></span>
                        </button>
                    </li> <br><br>
                </ul>
                <ul class="pager well">
                    <li data-toggle="tooltip" title="Ver Sugerencia" data-placement="left">
                        <button class="help btn btn-default">
                            <span class="glyphicon glyphicon-eye-open see"></span>
                        </button>
                    </li>
                </ul>
                <ul class="pager well">
                    <li data-toggle="tooltip" title="Informações" data-placement="left">
                        <a href="#"> 
                            <span class="glyphicon glyphicon-info-sign"></span>
                        </a>
                    </li>
                    <li data-toggle="tooltip" title="Ajuda?" data-placement="right">
                        <a href="#"> 
                            <span class="glyphicon glyphicon-question-sign"></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        
        <footer id="dica" class="jumbotron">
            <p style="text-align: center;" id="textdica"></p>
        </footer>
        
        <!-- Janela Modal -->
        
        <div class="modal fade" tabindex="-1" role="dialog" id="win-modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary but">Sí</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
        
        <!-- ########## SCRIPTS ####33333 -->
          <script type="text/javascript">
              jQuery(function (){
                  $('li').hover(function(){
                      $(this).tooltip('show');
                  },function(){
                      $(this).tooltip('destroy');
                  });
                  
                  $('.help').click(function(){
                    $('span.see').removeClass('glyphicon glyphicon-eye-open').addClass('glyphicon glyphicon-eye-close');
                    
                    $('footer#dica').slideDown();
                    // Mask Active
                        $('div#mask-invible').show();
                        //Hide Mask
                            $('div#mask-invible').click(function(){
                               $(this).hide(); 
                                $('footer#dica').slideUp();
                            });
                    
                    //Ocultar 
                        $('footer#dica').click(function(){
                           $(this).slideUp(); 
                        });
                  });
                 
                 //Troca de icones
                 $('#jump-one').click(function(){
                    $('span.jumper-I').removeClass('glyphicon glyphicon-share-alt').addClass('glyphicon glyphicon-remove'); 
                 });
                 
                  $('#jump-two').click(function(){
                    $('span.jumper-II').removeClass('glyphicon glyphicon-share-alt').addClass('glyphicon glyphicon-remove'); 
                 });
                 
                  $('#jump-three').click(function(){
                    $('span.jumper-III').removeClass('glyphicon glyphicon-share-alt').addClass('glyphicon glyphicon-remove'); 
                 });
                 
                 //Modal 
                 $('.modal-title').html('Vamos a empezar !!!');
                 $('.modal-body').html('<center><img src="imagens/gamepad.png"/><center>');
                 $('#win-modal').modal('show');
				 					
                    $('#win-modal').click(function(){
                        $('#win-modal').modal('hide');
                        stoptime = false;
                        startCountdown();
                    });
				 
               });
          </script>
    </body>
    
</html>
