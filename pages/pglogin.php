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
        <link rel="stylesheet" type="text/css" href="css/log-in.css" />
        <!--JS Bootstrap 3.3.5 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/login_ajax.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <section id="areaForm" class="jumbotron">
            <form method="post" action="" id="form" name="form">
                <div class="form-group">
                    <label for="exampleInputNome">Digite seu nome para jogar</label>
                    <input type="text" class="form-control" id="exampleInputNome" placeholder="Nome Completo" required>
                 </div> <br/>
                
                 <nav id="menu">
                        <ul class="pager">
                            <li data-toggle="tooltip" title="Jogar" data-placement="left">
                                <a href="#">
                                    <span class="glyphicon glyphicon-user"></span>
                                </a>
                            </li>
                            <li data-toggle="tooltip" title="Regras" data-placement="top">
                                <a href="#">
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                </a>
                            </li>
                            <li data-toggle="tooltip" title="Ranking" data-placement="right">
                                <a href="#">
                                    <span class="glyphicon glyphicon-indent-right"></span>
                                </a>
                            </li>
                        </ul>
                  </nav>
            </form> 
        </section>
        
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
