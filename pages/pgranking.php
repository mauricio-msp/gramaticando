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
                        <th class="text-center">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-center">Novinha</td>
                        <td class="text-center">230</td>
                        <td class="text-center">Xeda</td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-center">Novinha</td>
                        <td class="text-center">230</td>
                        <td class="text-center">Xeda</td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-center">Novinha</td>
                        <td class="text-center">230</td>
                        <td class="text-center">Xeda</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-center text-primary" style="font-size: 13pt;">
                            <span> Copyright 
                                <span class="glyphicon glyphicon-copyright-mark" style="font-size: 11pt;"></span> 
                                <?php echo date('Y'); ?>
                                - Todos os direitos resevados.
                            </span>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </section>
    </body>
</html>


