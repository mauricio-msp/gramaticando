<?php
    
    require_once '../Classes/DAO/conexao.php';
    
    if(isset($_POST['Nome'])):
        $data['nome'] = $_POST['Nome'];
        $ver = Users::create($data);
        
        if (count($ver) > 0):
            echo 1;
        else:
            echo 2;
        endif;
    else:
        echo 3;
    endif;
	
?>