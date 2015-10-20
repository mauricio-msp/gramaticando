<?php
    
    require_once '../Classes/DAO/inserir.php';
    require_once '../Classes/DAO/ler.php';

    if(!isset($_POST['cadastro'])):
        
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        if(!ler($nome)):
            if(inserir($nome)):
            	echo 1;
            else:
                echo 2;
            endif;
        else:
            echo 3;
        endif;
    endif;