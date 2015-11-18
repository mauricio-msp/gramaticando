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
		
	?>
</div>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Desafio - Gramaticando</title>
        <!--CSS Bootstrap 3.3.5 -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/questoes.css" />
        <!--JS Bootstrap 3.3.5 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/login_ajax.js"></script>
        <script src="js/bootstrap.js"></script>
        <script>
        	jQuery(document).ready(function() {
                $('#stop').click(function(){
					$.ajax({
						url: 'functions/funcParar.php',
						beforeSend: function(){
							
						},
						success: function(data){
							if(data == 1){
								window.location='login';
							}
						}
					});
					return false;
				});
            });
        </script>
    </head>
    <body>
        
        <!-- Cabeçalho da Pergunta -->
        <header id="question" class="jumbotron">
            <p>pergunta vem aqui?</p>
        </header>
        
        <!-- Area das estatísticas -->
        <aside id="static-left" class="jumbotron">
            <h2> Estatística </h2>
            
            <nav id="dados">
                <ul class="nav nav-pills nav-stacked">
                    <li class="well">
                        <a href="#"> 
                            <p>Prêmio R$ 0</p> 
                            <p>Parar  R$ 0 </p>
                            <p>Perde  R$ 0</p>
                        </a>
                    </li>
                    <li class="text-uppercase well">
                        <a href="#"> 
                            Jogador 
                        </a>
                    </li>
                     <li class="text-uppercase well">
                        <a href="#"> 
                            Faltam 
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        
        <section id="itens">
            <nav id="alernativas">
                <ul class="pager">
                  <li><a href="#" class="alter">Previous</a></li> <br/><br/>
                  <li><a href="#" class="alter">Previous</a></li> <br/><br/>
                  <li><a href="#" class="alter">Previous</a></li> <br/><br/>
                  <li><a href="#" class="alter">Previous</a></li> <br/><br/>
                </ul>
                <ul class="pager" id="neg">
                  <li><a href="javascript:void();" id="stop">Parar</a></li> 
                  <li><a href="#">Ajuda</a></li>
                </ul>
            </nav>
        </section>
        
        <!-- Area da Ajuda -->
        <aside id="help-right" class="jumbotron">
            <h2> Ajuda </h2>
            
            <nav>
                <ul class="pager well">
                    <li data-toggle="tooltip" title="Pular" data-placement="left">
                        <button class="btn btn-default">
                            <span class="glyphicon glyphicon-share-alt"></span>
                        </button>
                    </li> <br><br>
                    <li data-toggle="tooltip" title="Pular" data-placement="left">
                        <button class="btn btn-default">
                            <span class="glyphicon glyphicon-share-alt"></span>
                        </button>
                    </li> <br><br>
                    <li data-toggle="tooltip" title="Pular" data-placement="left">
                        <button class="btn btn-default">
                            <span class="glyphicon glyphicon-share-alt"></span>
                        </button>
                    </li> <br><br>
                </ul>
                <ul class="pager well">
                    <li data-toggle="tooltip" title="Pedir Ajuda" data-placement="left">
                        <button class="btn btn-default">
                            <span class="glyphicon glyphicon-user"></span>
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
       
        <!-- Rodapé com tempo -->
        <footer id="temp" class="jumbotron">
            <p>O tempo para as questões vem aqui</p>
        </footer>
        <!-- ########## SCRIPTS ####33333 -->
          <script type="text/javascript">
              jQuery(function (){
                  $('li').hover(function(){
                      $(this).tooltip('show');
                  },function(){
                      $(this).tooltip('destroy');
                  });
              });
          </script>
    </body>
    
</html>
