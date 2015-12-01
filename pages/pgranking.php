<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="author" content="Equipe Zcomics">
        <meta name="description" content="Zona Comics - Download de Séries ">
        <meta name="keywords" content="downloads e notícias">
        <!--CSS Bootstrap 3.3.5 -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/ranking.css" />
        <!--JS Bootstrap 3.3.5 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
        <title>Ranking</title>
    </head>
    <body>
        
        <nav id="back">
            <ul class="pager">
              <li class="previous"><a href='<?php echo RAIZ; ?>'><span aria-hidden="true">&larr;</span> Volver </a></li>
            </ul>
        </nav>
        
        <section id="ranking">
            <table class="table table-responsive table-striped" id="table-order">
                <thead>
                    <tr>
                        <th class="text-center">Posº</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Puntuacion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once 'Classes/DAO/conexao.php';

                            $users = Users::find("all", array("order"=>"pontuacao ASC"));
                            $cont  = 0;

                            foreach($users as $user):
                            $cont++;
                            if($cont == 11 || $user == null):
                                    break;
                            endif;
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $cont.'º'; ?></td>
                        <td class="text-center"><?php echo $user->nome; ?></td>
                        <td class="text-center"><?php echo $user->pontuacao; ?></td>
                    </tr>
                    <?php
                        endforeach;
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-center text-primary" style="font-size: 13pt;">
                            <span> Derechos de autor
                                <span class="glyphicon glyphicon-copyright-mark" style="font-size: 11pt;"></span> 
                                <?php echo date('Y'); ?>
                                - Todos los derechos reservados.
                            </span>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </section>
    </body>
</html>


