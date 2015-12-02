<div hidden="true">
	<?php
    	
		require_once 'Clases/DAO/conexao.php';
		
		session_start();
		
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
        <link rel="stylesheet" type="text/css" href="css/itens.css" />
        <!--JS Bootstrap 3.3.5 -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        
        <nav id="back">
            <ul class="pager">
              <li class="previous"><a href='<?php echo RAIZ; ?>'><span aria-hidden="true">&larr;</span> Volver </a></li>
            </ul>
        </nav>
        
        <section id="resultados" class="jumbotron">
            <h2>Resolución de Problemas</h2>
            <hr>
            <?php
            	
				$id    = $_SESSION['user_gram'];
				$quest = Quests::find("all", array("conditions"=>array("id_user", $id), "order"=>"id ASC"));
				
								
			?>
            <div class="alert alert-success">
                Questão certa
            </div>
            <div class="alert alert-danger">
                Questão errada <br>
                Justificativa
            </div>
        </section>
    </body>
    
</html>


