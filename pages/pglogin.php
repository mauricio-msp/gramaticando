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
        <link rel="stylesheet" type="text/css" href="css/login.css" />
        <!--JS Bootstrap 3.3.5 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/ajaxLogin.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <section id="areaForm" class="jumbotron">
            <h2 class="h2">GRAMATICANDO</h2>
            <form method="post" action="" id="form" name="form">
                <div class="form-group">
                    <label for="exampleInputNome">Escriba su nombre para jugar</label>
                    <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Nombre o Apellido" required pattern="[A-z\s]+$">
                 </div> <br/>
                
                 <nav id="menu">
                        <ul class="pager">
                            <li data-toggle="tooltip" title="Juega" data-placement="left">
                                <button type="submit" name="jogar" id="playGame" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-play"></span>
                                </button>
                            </li>
                            <li data-toggle="tooltip" title="Reglas" data-placement="top" id="reg">
                                <a href="javascript:void();">
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                </a>
                            </li>
                            <li data-toggle="tooltip" title="Clasificación" data-placement="right">
                                <a href="ranking">
                                    <span class="glyphicon glyphicon-indent-right"></span>
                                </a>
                            </li>
                        </ul>
                  </nav>
            </form> 
        </section>
        
        <!-- Janela Modal -->
        
        <div class="modal fade" id="win-modal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  	<span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title">Regras Gerais</h4>
                </div>
                <div class="modal-body">
                  <p>
                      <span class="badge" style="background-color: #0275D8">1</span>
                      Cada pergunta terá um tempo máximo estipulado para as respostas, que é de 30 segundos
                  </p> <br/>
                  <p>
                      <span class="badge" style="background-color: #0275D8">2</span>
                      A cada acerto o jogador ganha 10pts
                  </p> <br/>
                  <p>
                      <span class="badge" style="background-color: #0275D8">3</span>
                      A cada 10 pts que o jogador ganha, ele ganha a metade em dinheiro <br/> &nbsp;&nbsp;&nbsp;
                      EX: 30pts equivale à R$ 15,00.
                  </p> <br/>
                  <p>
                      <span class="badge" style="background-color: #0275D8">4</span>
                      A função do dinheiro ganho ao longo do jogo é para comprar novas dicas, a <br/>
                      medida que você gasta, e também poderá comprar pulos.
                  </p> <br/>
                  <p>
                      <span class="badge" style="background-color: #0275D8">5</span>
                      As dicas valem 200 pts ou R$ 100,00 e os pulos 100 pts  ou R$ 50,00. <br/>
                      Caso você complete os 200 pts ou 100 pts, aparecerá a opção de comprar.
                  </p> <br/>
                  <p>
                      <span class="badge" style="background-color: #0275D8">6</span>
                      O jogador tem direito a 3 pulos e consultar uma dica.
                  </p> <br/>
                  <p>
                      <span class="badge" style="background-color: #0275D8">7</span>
                      Se você preferir parar, você ganha a metade do seus pts.
                  </p> <br/>
                  <p>
                      <span class="badge" style="background-color: #0275D8">8</span>
                      Em caso de resposta errada, o jogador ganha o equivalente a quarta parta de pts.
                  </p> <br/>
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
                    
                        // Mascara e Window Modal 
                        $('#reg').click(function(){
                            // Modal 
                            $('#win-modal').modal('show');
                        });
                         
                });            
            </script>
    </body> 
</html>
