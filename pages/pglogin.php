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
        <link rel="shorcut icon" href="imagens/icon.png" />
        <!--CSS Bootstrap 3.3.5 -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <!--JS Bootstrap 3.3.5 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/login_ajax.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        
        <section id="areaForm" class="modal-content">
            <h2 id="poo" class="text-left" data-toggle="popover" title="Desenvolvedores &nbsp;  | &nbsp;  Contatos" 
                 data-content="Dhonata Freitas   &nbsp; - (85) 9.8929-8014 
                               Maurício Porfírio &nbsp;- (88) 9.9984-9065
                               Reginaldo Sousa    - (85) 9.9807-4622
                               William Adriano  &nbsp;&nbsp; - (85) 9.9741-4080
                               Ítalo Xavier     &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;  - (85) 9.8810-4170" 
                               data-placement="left"> Gramaticando - Espanhol</h2>  
             
             <div id="row">
                <p class="text-justify"><strong>Olá amigos!</strong> </p>

                <p class="text-justify"> Nosso jogo é um quiz de perguntas e respostas dinâmico e de fácil compreensão.</p>
                <p class="text-justify"> O intuito do nosso jogo é dinamizar o ato de aprender, tornando-o de forma mais prática, divertida e com muita qualidade.</p>
                <p class="text-justify"> Aqui você testará seus conhecimentos em relação aos advérbios de tempo, espaço, lugar e outros.</p> 
                <p class="text-justify"> Com o uso de nosso jogo você poderá além de testar ampliar seus conhecimentos. </p>
                <blockquote>
                   Bom jogo e divirta-se.
                </blockquote>
             </div> <br/>
             
             <form action="functions/funcInserir.php" method="post" id="login_form">

                 <div class="form-group">
                     <label class="control-label" for="inputGroupSuccess1">Dado Obrigatório</label> <br><br>
                     <div class="input-group">
                         <span class="input-group-addon" id="icon">
                             <span class="glyphicon glyphicon-user"></span>
                         </span>
                         <input type="text" class="inputs" name="nome" id="nome"
                                aria-describedby="Dado Necessário" placeholder="Nome Completo" required
                                data-toggle="tooltip" data-placement="top" title="EX: Maurício de Souza Porfírio"/>

                     </div> <br />
                     <button type="submit" name="cadastro" class="btn btn-danger" id="button"
                             data-toggle="tooltip" data-placement="left" title="Vamos Começar !!!">
                         <span class="glyphicon glyphicon-log-in"></span> &nbsp;
                         Entrar
                     </button>
                 </div>

             </form>
        </section>       

    </body>
    
    <!-- ################ SCRIPT ############### -->
    <script>
        $(function(){
            $('#nome').hover(function(){
                $('#nome').tooltip('show');
            },function(){
                $('#nome').tooltip('destroy');
            });
            
            $('#button').hover(function(){
                $('#button').tooltip('show');
            },function(){
                $('#button').tooltip('destroy');
            });
            
            $('#poo').hover(function(){
                $('#poo').popover('show');
            },function(){
                $('#poo').popover('destroy');
            });
        });
    </script>
</html>
