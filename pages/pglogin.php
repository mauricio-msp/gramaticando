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
        <script src="js/jquery-1.11.3.min.js"></script>
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
                  <h4 class="modal-title">Reglas Generales</h4>
                </div>
                <div class="modal-body">
                  <p>
                      <span class="badge" style="background-color: #0275D8">1</span>
                      Cada pregunta tendrá un tiempo máximo asignado para las respuestas, que es de 30 segundos.
                  </p> <br/>
                  <p>
                      <span class="badge" style="background-color: #0275D8">2</span>
                      Cada golpe que el jugador gana 10 puntos.
                  </p> <br/>
                  <p>
                      <span class="badge" style="background-color: #0275D8">3</span>
                      Cada 10 puntos el jugador gana, gana la mitad en efectivo <br/> &nbsp;&nbsp;&nbsp;
                      <kbd>EX:</kbd> 30 puntos equivalentes a R$ 15,00.
                  </p> <br/>
                  <p>
                      <span class="badge" style="background-color: #0275D8">4</span>
                      La función del dinero ganado a través del juego es comprar nuevos consejos, a
                      medida que pasan, y también se puede comprar saltos.
                  </p> <br/>
                  <p>
                      <span class="badge" style="background-color: #0275D8">5</span>
                      Los consejos que valen 200 puntos o R$ 100,00 y los saltos 100 pts o R$ 50,00.
                      Si completa los 200 puntos y 100 puntos, aparece la opción de compra.
                  </p> <br/>
                  <p>
                      <span class="badge" style="background-color: #0275D8">6</span>
                      El jugador tiene derecho a 3 saltos y consulte a un consejo.
                  </p> <br/>
                  <p>
                      <span class="badge" style="background-color: #0275D8">7</span>
                      Si prefiere parar, usted gana la mitad de sus puntos.
                  </p> <br/>
                  <p>
                      <span class="badge" style="background-color: #0275D8">8</span>
                      En caso de respuesta incorrecta, el jugador gana el equivalente a la cuarta salida de pts.
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
