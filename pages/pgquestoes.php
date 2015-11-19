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
        <script src="js/questoes.js"></script>
        <script src="js/bootstrap.js"></script>
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
                            <p>Prêmio pts <span id="premio">0</span> </p>
                            <p>Parar  pts <span id="parar">0</span> </p>
                            <p>Perde  pts <span id="perde">0</span> </p>
                        </a>
                    </li>
                    <li class="well">
                        <a href="#"> 
                            <span style="text-transform: uppercase">
                                Jogador
                            </span> <br/>
                            <span style="font-size: 12pt;margin-right: 50px;color: #333;">
                                &rsaquo;&rsaquo;<?php echo $user->nome; ?>
                            </span> 
                        </a>
                    </li>
                     <li class="well">
                        <a href="#"> 
                            <span style="text-transform: uppercase;">Faltam</span> <br/>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        
        <section id="itens">
            <nav id="alernativas">
                <ul class="pager">
                  <li><a href="javascript:void();" rel="item1" class="alter">Previous</a></li> <br/><br/>
                  <li><a href="javascript:void();" rel="item2" class="alter">Previous</a></li> <br/><br/>
                  <li><a href="javascript:void();" rel="item3" class="alter">Previous</a></li> <br/><br/>
                  <li><a href="javascript:void();" rel="item4" class="alter">Previous</a></li> <br/><br/>
                </ul>
                <ul class="pager" id="cert">
                	<li>Voce tem certeza?</li><br>
                	<li><a href="javascript:void();" id="yes">Sim</a></li>
                	<li><a href="javascript:void();" id="not">Não</a></li>
                </ul>
                <ul class="pager" id="neg">
                  <li><a href="javascript:void();" id="stop">Parar</a></li> 
                  <li id="desblock"><a href="javascript:void();">Ajuda</a></li>
                </ul>
            </nav>
        </section>
        
        <!-- Area da Ajuda -->
        
        <div id="block"></div>
        
        <aside id="help-right" class="jumbotron">
            <h2> Ajuda </h2>
            
            <nav>
                <ul class="pager well">
                    <li data-toggle="tooltip" title="Pular" data-placement="left">
                        <button class="jump btn btn-default">
                            <span class="glyphicon glyphicon-share-alt"></span>
                        </button>
                    </li> <br><br>
                    <li data-toggle="tooltip" title="Pular" data-placement="left">
                        <button class="jump btn btn-default">
                            <span class="glyphicon glyphicon-share-alt"></span>
                        </button>
                    </li> <br><br>
                    <li data-toggle="tooltip" title="Pular" data-placement="left">
                        <button class="jump btn btn-default">
                            <span class="glyphicon glyphicon-share-alt"></span>
                        </button>
                    </li> <br><br>
                </ul>
                <ul class="pager well">
                    <li data-toggle="tooltip" title="Pedir Ajuda" data-placement="left">
                        <button class="help btn btn-default">
                            <span class="glyphicon glyphicon-user"></span>
                        </button>
                    </li>
                </ul>
                <ul class="pager well" style="z-index: 999">
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
                  
                  $('#desblock').click(function(){
                    $('#block').hide();
                  });
               });
          </script>
    </body>
    
</html>
